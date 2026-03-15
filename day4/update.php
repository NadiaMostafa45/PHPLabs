<?php
include "db.php";
session_start();

if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit;
}

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];

$sql = "UPDATE users 
SET fname='$fname',
lname='$lname',
country='$country'
WHERE id=$id";

mysqli_query($conn,$sql);

header("Location:list.php");
?>