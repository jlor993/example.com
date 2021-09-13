<?php
require '../../core/bootstrap.php';
include '../../core/db_connect.php';

checkSession();

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{
    $content .= "<a href=\"view.php?id={$row['id']}\">{$row['email']}</a> ";
}

$content .="<br><a href=\"add.php\">New User</a><br>";

include '../../core/layout.php';