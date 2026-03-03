<?php
if (!isset($_GET['id'])) {
    header("Location: list.php");
    exit;
}

$id = $_GET['id'];

$rows = file("users.txt");

if (isset($rows[$id])) {
    unset($rows[$id]);
    file_put_contents("users.txt", implode("", $rows));
}

header("Location: list.php");
exit;
?>