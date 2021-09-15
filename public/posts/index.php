<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

$meta=[];
$meta['title']="Jeffrey Lor Posts";
$meta['description']="Posts of Jeffrey Lor's Website";
$meta['keywords']="Jeffrey Lor, posts";

$content=null;

$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{
    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a>";
}

$content .="<br><a href=\"add.php\">New Post</a><br>";

include '../../core/layout.php';