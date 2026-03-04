<?php
$conn=mysqli_connect("localhost","root","","Users");
if(!$conn){
    die("Connection failed :: " . mysqli_connect_error());
}

?>