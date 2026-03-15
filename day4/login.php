<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $rows = file("users.txt");

    foreach($rows as $row){

        $data = explode(",", trim($row));

        if($data[6] == $username && $data[7] == $password){

            $_SESSION["user"] = $username;

            header("Location: list.php");
            exit;
        }
    }

    echo "Invalid username or password";
}
?>

<form method="post">

Username:
<input type="text" name="username"><br>

Password:
<input type="password" name="password"><br>

<input type="submit" value="Login">

</form>
