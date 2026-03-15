<?php
include "db.php";
session_start();

if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id=$id");

header("Location:list.php");
?>