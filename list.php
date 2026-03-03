<?php
$rows = file_exists("users.txt") ? file("users.txt") : [];
?>

<h2>All Users</h2>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>First</th>
    <th>Last</th>
    <th>Address</th>
    <th>Country</th>
    <th>Gender</th>
    <th>Skills</th>
    <th>Username</th>
    <th>Department</th>
    <th>Actions</th>
</tr>

<?php foreach ($rows as $index => $row): 
    $data = explode(",", trim($row));
?>
<tr>
    <td><?= $index ?></td>
    <td><?= $data[0] ?></td>
    <td><?= $data[1] ?></td>
    <td><?= $data[2] ?></td>
    <td><?= $data[3] ?></td>
    <td><?= $data[4] ?></td>
    <td><?= str_replace("|", ", ", $data[5]) ?></td>
    <td><?= $data[6] ?></td>
    <td><?= $data[8] ?></td>
    <td>
        <a href="view.php?id=<?= $index ?>">View</a> |
        <a href="edit.php?id=<?= $index ?>">Edit</a> |
        <a href="delete.php?id=<?= $index ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>