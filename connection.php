<?php


$hostname = "localhost";

$user = "root";

$password = "";

$database = "tuongee";

$db = mysqli_connect($hostname,$user,$password) or die("Connection Failed........!!!");

mysqli_select_db($db,$database) or die("Database not selected....!!!");





mysqli_close($db);

?>
