<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
</head>
<body>

<form action="welcome.php" method="post">

<label>First name:</label><br>
<input type="text" name="fname" required minlength="3"><br>

<label>Last name:</label><br>
<input type="text" name="lname" required minlength="3"><br><br>

<label>Address:</label><br>
<input type="text" name="addr" required><br><br>

<label>Country:</label><br>
<select name="country" required>
    <option value="">Select Country</option>
    <option value="Egypt">Egypt</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
</select><br><br>

<label>Gender:</label><br>
<input type="radio" name="gender" value="male" required> Male
<input type="radio" name="gender" value="female"> Female
<br><br>

<label>Skills:</label><br>
<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="J2SE"> J2SE
<input type="checkbox" name="skills[]" value="MySQL"> MySQL
<input type="checkbox" name="skills[]" value="PostgreSQL"> PostgreSQL
<br><br>

<label>Username:</label><br>
<input type="text" name="username"
       pattern="[A-Za-z0-9]{4,}"
       title="Username must be at least 4 characters and contain only letters and numbers"
       required><br><br>

<label>Password:</label><br>
<input type="password" name="pass" minlength="6" required><br><br>

<label>Department:</label><br>
<input type="text" name="dep" required><br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>