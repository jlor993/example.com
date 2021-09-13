<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

checkSession();

$input = filter_input_array(INPUT_GET);
$id = preg_replace("/[^a-z0-9-]+/", "", $input['id']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);

$row = $stmt->fetch();
$content .= "<h1>{$row['email']}</h1>";
$content .= "<h2>{$row['first_name']} {$row['last_name']}</h2>";

$content .="<br><a href=\"edit.php?id={$row['id']}\">Edit Post</a><br>";
$content .="<br><a href=\"delete.php?id={$row['id']}\">Delete Post</a><br>";

echo $content;