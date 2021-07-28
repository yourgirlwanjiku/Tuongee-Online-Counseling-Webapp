<?php
include 'db.php';
include "functions.php";



?>
<?php
session_start();
//if (isset($_SESSION['role'])){
 //if($_SESSION['role']!='admin'){
	//	header('Location:login.php');
	//}
//}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <!-- Custom styles for this template-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
	<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>dashboard</title>
</head>
   
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top bottom-border">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">counselor manager</a>
              <div class="bottom-border pb-2">
                <img src="icon1.png" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white mb-4 bottom-border">admin123</a>
              </div>
              <ul class="navbar-nav flex-column mt-2">
						 <li class="nav-item"><a href="admin.php" class="nav-link p-3 mb-2 current "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
						 <li class="nav-item"><a href="posts.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>add post</a></li>
						 <li class="nav-item"><a href="posts.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>update post</a></li>
             <li class="nav-item"><a href="posts.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>delete post</a></li>
             <li class="nav-item"><a href="users.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Manage users</a></li>
						 <li class="nav-item"><a href="reports.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Manage Reports</a></li>
					     <li class="nav-item"><a href="reports.php" class="nav-link p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Manage charts</a></li>
						</ul>
						
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
				  <li class="nav-item"><a href="posts.php" class="nav-link p-2 mb-1 "><i class="fas fa-file-alt text-light fa-lg mr-3"></i>post</a></li>
						 <li class="nav-item"><a href="topics.php" class="nav-link p-2 mb-1 "><i class="fas fa-file-alt text-light fa-lg mr-3"></i>topics</a></li>
						 <li class="nav-item"><a href="users.php" class="nav-link p-2 mb-1 "><i class="fas fa-user text-light fa-lg mr-3"></i> users</a></li>
						 <li class="nav-item"><a href="reports.php" class="nav-link p-2 mb-1 "><i class="fas fa-chart-line text-light fa-lg mr-3"></i>Reports</a></li>
            <li class="nav-item ml-md-auto"><a href="logout.php" class="nav-link" data-toggle="modal" data-target="logout.php"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
</nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
</nav>
<br><br>
  
