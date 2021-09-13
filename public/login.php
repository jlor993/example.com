<?php
require '../core/bootstrap.php';
// 1. Connect to the database
require '../core/db_connect.php';

// 2. Filter the user inputs
$input = filter_input_array(INPUT_POST,[
    'email'=>FILTER_SANITIZE_EMAIL,
    'password'=>FILTER_UNSAFE_RAW
]);

$message=null;
$forgot_password=null;
$attempt=0;

// 3. Check for a POST request
if(!empty($input)){
    // 4. Query the database for the requested user
    $input = array_map('trim', $input);
    $sql='SELECT id, hash FROM users WHERE email=:email';
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
        'email'=>$input['email']
    ]);
    $row=$stmt->fetch();

    if($row){
        // 5. Attempt a password match
        $match = password_verify($input['password'], $row['hash']);
        if($match){
            // 6.1 Set a session
            $_SESSION['user'] = [];
            $_SESSION['user']['id']=$row['id'];

            if($input['email']=="Admin@admin.com")
            {
                $_SESSION['is_admin'] = true;
            }
            else
            {
                $_SESSION['is_admin'] = false;
            }

            // 6.2 Redirect the user
            if (empty($_GET))
            {
                $message="<div>Login Successful!</div>";
                header('LOCATION: ');
            }
            else
            {
                header('LOCATION: ' . $_GET['goto']);
            }
        }
        else {
            $attempt++;
            $message="<div class=\"alert alert-danger\">{ Invalid password }</div>";
        }
    }
    else {
        $message="<div class=\"alert alert-danger\">{ Invalid email }</div>";
    }
    if($attempt > 0)
    {
        $forgot_password="<a class=\"nav-link\" href=\"/example.com/public/resetpassword.php\">Reset Password</a>";
    }
}
$meta=[];
$meta['title']="Login";

$content=<<<EOT
<h1>{$meta['title']}</h1>
{$message}
<form method="post" autocomplete="off">
    <div class="form-group">
        <label for="email">Email</label>
        <input 
            class="form-control"
            id="email"
            name="email"
            type="email"
        >
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="password" 
            type="password"
        >
    </div>
    <input type="submit" class="btn btn-primary">
</form>
{$forgot_password}
EOT;

require '../core/layout.php';