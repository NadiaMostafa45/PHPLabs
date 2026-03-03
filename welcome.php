<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $addr = $_POST["addr"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $skills = isset($_POST["skills"]) ? implode(", ", $_POST["skills"]) : "None";
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $dep = $_POST["dep"];
    file_put_contents("users.txt", "First Name: $fname\nLast Name: $lname\nAddress: $addr\nCountry: $country\nGender: $gender\nSkills: $skills\nUsername: $username\nPassword: $pass\nDepartment: $dep\n-------------------------\n", FILE_APPEND);

}

?>