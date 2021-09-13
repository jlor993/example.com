<?php
require '../core/bootstrap.php';
require '../core/db_connect.php';
require '../core/About/src/Validation/Validate.php';

use About\Validation;

$valid = new About\Validation\Validate();
$message=null;
$id=$_SESSION['user']['id'];

$input = filter_input_array(INPUT_POST,[
    'password'=>FILTER_UNSAFE_RAW,
    'confirm_password'=>FILTER_UNSAFE_RAW
]);

//$message .= "<h2>Reset Password for ".$_SESSION['user']['id']."</h2>";

if(!empty($input)){

    $valid->validation = [

        'password'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please enter a password'
        ],[
            'rule'=>'strength',
            'message'=>'Must contain [\Wa-zA-Z0-9-!]'
        ]],

        'confirm_password'=>[[
            'rule'=>'notEmpty',
            'message'=>'Please confirm your password'
        ],[
            'rule'=>'matchPassword',
            'message'=>'Passwords do not match'
        ]],

    ];

    $valid->check($input);

    if(empty($valid->errors)){
        //Strip white space, beginning and end
        $input = array_map('trim', $input);
        $hash = password_hash($input['password'], PASSWORD_DEFAULT); 

        $sql='UPDATE
            users 
        SET 
            hash=:hash
        WHERE
            id=:id
        ';

        $stmt=$pdo->prepare($sql);

        try {

            $stmt->execute([
                'hash'=>$hash,
                'id'=>$id
            ]);

            header('LOCATION: /example.com/public/login.php');

        } catch(PDOException $e) {
            $message .= "<div class=\"alert alert-danger\">{$e->errorInfo[2]}</div>";
        }
    }else{
        //3. If validation fails create a message, DO NOT forget to add the validation 
        //methods to the form.
        $message .= "<div class=\"alert alert-danger\">Your form has errors!</div>";
    }

}

$meta=[];
$meta['title']="Reset Password";

$content=<<<EOT
<h1>{$meta['title']}</h1>
{$message}
<form method="post" autocomplete="off">

    <div class="form-group">
        <label for="password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="password" 
            type="password"
            value="{$valid->userInput('password')}"
        >
        <div class="text text-danger">{$valid->error('password')}</div>
    </div>

    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input 
            class="form-control" 
            id="confirm_password" 
            name="confirm_password" 
            type="password"
            value="{$valid->userInput('confirm_password')}"
        >
        <div class="text text-danger">{$valid->error('confirm_password')}</div>
    </div>

    <input type="submit" class="btn btn-primary">

</form>
EOT;

require '../core/layout.php';