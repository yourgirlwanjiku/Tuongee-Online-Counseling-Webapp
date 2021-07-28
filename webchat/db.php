<?php
$hostname ="localhost";
$username ="root";
$password ="";
$database ="tuongee";
// Create connection
$db= mysqli_connect($hostname,$username,$password) or die("Connection Failed........!!!");
mysqli_select_db($db,$database) or die("Database not selected....!!!");



?>