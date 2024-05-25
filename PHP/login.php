<?php

require "db_connect.php";

$username=$_POST["username"];
$password=$_POST["password"];
$sql_insert="select username from users where username = '$username' And password = '$password'";
 
$result=mysqli_query($connection,$sql_insert);
if(mysqli_num_rows($result)>0)
echo "ok";
else
echo "error";
?>