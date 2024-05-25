<?php

require "db_connect.php";

$username=$_POST["username"];
$password=$_POST["password"];
$sql_insert="INSERT INTO users (Username, Password)
VALUES ('$username', '$password');";
 
$result=mysqli_query($connection,$sql_insert);
if($result)
echo "success $username $password";
else
echo "error";
?>