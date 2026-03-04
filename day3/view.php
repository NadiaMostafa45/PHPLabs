<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<h2>User Details</h2>

First Name: <?= $row['fname'] ?><br>
Last Name: <?= $row['lname'] ?><br>
Address: <?= $row['addr'] ?><br>
Country: <?= $row['country'] ?><br>
Gender: <?= $row['gender'] ?><br>
Skills: <?= $row['skills'] ?><br>
Username: <?= $row['username'] ?><br>
Department: <?= $row['dep'] ?><br>