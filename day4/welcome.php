<?php
include "db.php";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $addr = trim($_POST["addr"]);
    $country = $_POST["country"];
    $gender = $_POST["gender"] ?? "";
    $skills = isset($_POST["skills"]) ? implode("|", $_POST["skills"]) : "None";
    $username = trim($_POST["username"]);
    $pass = $_POST["pass"];
    $dep = $_POST["dep"];
    $email = trim($_POST["email"]);

    if (empty($fname)) {
        $errors[] = "First name is required";
    }

    if (empty($lname)) {
        $errors[] = "Last name is required";
    }

    if (empty($addr)) {
        $errors[] = "Address is required";
    }

    if (empty($username)) {
        $errors[] = "Username is required";
    } elseif (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters";
    }

    if (empty($pass)) {
        $errors[] = "Password is required";
    } elseif (strlen($pass) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    if (empty($gender)) {
        $errors[] = "Please select gender";
    }

    if (empty($dep)) {
        $errors[] = "Department is required";
    }

    if (empty($errors)) {

        $sql = "INSERT INTO users (fname, lname, addr, country, gender, skills, username, pass, dep) 
        VALUES ('$fname', '$lname', '$addr', '$country', '$gender', '$skills', '$username', '$pass', '$dep')";

        mysqli_query($conn, $sql);

        header("Location: list.php");
        exit;
    } else {

        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }

    }
}
?>