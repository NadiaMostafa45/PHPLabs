<?php
if (!isset($_GET['id'])) {
    header("Location: list.php");
    exit;
}

$id = $_GET['id'];

$rows = file("users.txt");

if (!isset($rows[$id])) {
    echo "User not found";
    exit;
}

$data = explode(",", trim($rows[$id]));
?>

<h2>User Details</h2>

First Name: <?= $data[0] ?><br>
Last Name: <?= $data[1] ?><br>
Address: <?= $data[2] ?><br>
Country: <?= $data[3] ?><br>
Gender: <?= $data[4] ?><br>
Skills: <?= str_replace("|", ", ", $data[5]) ?><br>
Username: <?= $data[6] ?><br>
Department: <?= $data[8] ?><br>

<br><br>
<a href="list.php">Back</a>