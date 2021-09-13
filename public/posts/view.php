<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

$input = filter_input_array(INPUT_GET);
$slug = preg_replace("/[^a-z0-9-]+/", "", $input['slug']);

$content=null;
$stmt = $pdo->prepare('SELECT * FROM posts WHERE slug = ?');
$stmt->execute([$slug]);

$row = $stmt->fetch();
$content .= "<h1>{$row['title']}</h1>";

$content .="<br><a href=\"edit.php?id={$row['id']}\">Edit Post</a><br>";
$content .="<br><a href=\"delete.php?id={$row['id']}\">Delete Post</a><br>";

echo $content;