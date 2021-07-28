<?php
session_start();
require_once "db.php";
$message="";
$role="";
if(isset($_POST["btnLogin"]))
{
	  $username=$_POST["username"];
	  $password=$_POST["password"];
	  
	  $query="SELECT * FROM users WHERE username='$username'  AND password='$password'";
	  $result=mysqli_query($db,$query);
	if(mysqli_num_rows($result) >0)
	{
		  
		while($row=mysqli_fetch_assoc($result))

		{
		  if($row["role"]=="counselor manager")
			 {
			 $_SESSION['LoginUser']=$row["username"];	
			 header('Location: admin/admin.php');
			  }
		  else{
			  $_SESSION['LoginUser']=$row["username"];	
			  header('Location:client/client_home.php');
			   }
			 //elseif((//$_SESSION['LoginUser']=$row["username"];	
			 // header('Location:counselor_home.php');))
			  
		  
			}
	}
	else('Location:login.php');
}

?>