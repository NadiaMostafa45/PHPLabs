<?php
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

$line = $fname . "," . $lname . "," . $addr . "," . $country . "," .
        $gender . "," . $skills . "," . $username . "," . $pass . "," . $dep . "\n";

file_put_contents("users.txt", $line, FILE_APPEND);

    header("Location: list.php");
    exit;
}
?>