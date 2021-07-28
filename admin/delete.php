
<?php
$db = mysqli_connect('localhost', 'root', '', 'tuongee');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['ID']))
{

$result = mysqli_query($db,"DELETE FROM posts WHERE ID=".$_GET['ID']);
if($result==true)
	echo "sucess";
header("Location:posts.php");
}

?>