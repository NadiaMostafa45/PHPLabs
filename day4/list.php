<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<h2>Users</h2>

<table border="1">

<tr>
<th>ID</th>
<th>First</th>
<th>Last</th>
<th>Country</th>
<th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)): ?>

<tr>

<td><?= $row['id'] ?></td>
<td><?= $row['fname'] ?></td>
<td><?= $row['lname'] ?></td>
<td><?= $row['country'] ?></td>

<td>
<a href="view.php?id=<?= $row['id'] ?>">View</a>
<a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
<a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
</td>

</tr>

<?php endwhile; ?>

</table>