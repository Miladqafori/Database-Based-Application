<?php

$host="localhost";
$user="root";
$pass ="";
$dbName="register";
$connection=mysqli_connect($host,$user,$pass,$dbName);
if($connection)
echo "ارتباط برقرار شد";
else
echo "خطا ارتباط برقرار نشد";


?>