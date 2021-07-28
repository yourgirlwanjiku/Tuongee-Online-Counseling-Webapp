
<?php

include("tr123.php");
include("db.php");


?>

<!DOCTYPE html>
<html lang="en">
<html>
<meta charset="utf-8">
  <meta name ="viewport", content="width=device-width, initial-scale=1">
<head>
	<title>Tuongee4</title>

	  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">	
        <link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
        <link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  
   <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="blog.html"><img src="img/image2.png"> <span>TUONGEE</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li>
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li>
          <a class="nav-link" href="services.php">Our Services</a>
        </li>
        <li>
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
       
        
        <li  class="nav-item">
          <a class="nav-link" href="user_profile.php">Contact Us</a>
        </li>
        
      </ul>
 </div>
</div>
  </nav>

   <div class="banner_adds"> <a href="details.php?prd_id=20"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
 </div>
 
 
 
 <!-- end of left content -->
 <div class="center_content">
  
   
<?php

details();

?>





   
   
 </div>
 

<!-- end of main_container -->
<!--footer-->
<footer>
  <div class=" container-fluid padding">
   <div class="row text-center">
    <div class=" col-md-4">
      <img src="img/image2.png">TUONGEE
      <hr class=" light">
      <p> 0790508756</p>
      <p> tuongee@gmail.com</p>
      <P>NAIROBI</P>
      <p>KENYA</p>
    </div> 
    <div class="col-md-4">
      <hr class="light">
      <h5>Our Hours</h5>
      <hr class="light">
      <p> MONDAY-FRIDAY:8.00AM-11AM</p>
      <p>SARTUDAY :8.00AM-8.00PM</p>
      <p>SUNDAY:9.00AM-8.00PM</p>
    </div>
    <div class="col-md-4">
      <hr class="light">
      <h5>Our Office</h5>
      <hr class="light">
      <p> CITY</p>
      <p>STATE</p>
      <p>ZIPCODE</p>
    </div>
    <div class="col-12">
      <hr class=" light">
      <h5>&copy; tuongee.com</h5>
    </div>
   </div> 
  </div>
</footer>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <!-- JS -->
  <script src="scripts.js"></script>
  
</body>
</html>
