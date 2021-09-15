<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

$meta=[];
$meta['title']="Jeffrey Lor Users";
$meta['description']="Users of Jeffrey Lor's Website";
$meta['keywords']="Jeffrey Lor, users";

checkSession();

$content=null;

if($_SESSION['is_admin'])
{
    $stmt = $pdo->query("SELECT * FROM users");

    while ($row = $stmt->fetch())
    {
        $content .= "<a href=\"view.php?id={$row['id']}\">{$row['email']}</a> ";
    }
    $content .="<br><a href=\"add.php\">New User</a><br>";
}
else
{
    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch())
    {
        if($row['id'] == $_SESSION['user']['id'])
        {
            $content .= "<a href=\"view.php?id={$row['id']}\">{$row['email']}</a> ";
        }
    }
}

include '../../core/layout.php';