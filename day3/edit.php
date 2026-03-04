<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id'] ?>">

First Name
<input type="text" name="fname" value="<?= $row['fname'] ?>"><br>

Last Name
<input type="text" name="lname" value="<?= $row['lname'] ?>"><br>

Country
<input type="text" name="country" value="<?= $row['country'] ?>"><br>

<button type="submit">Update</button>

</form>