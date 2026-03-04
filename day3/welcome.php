<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $addr = $_POST["addr"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "None";
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $dep = $_POST["dep"];

 $skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "None";

$sql ="INSERT INTO users (fname, lname, addr, country, gender, skills, username, pass, dep) VALUES ('$fname', '$lname', '$addr', '$country', '$gender', '$skills', '$username', '$pass', '$dep')";

mysqli_query($conn,$sql);
    header("Location: list.php");
    exit;
}
?>