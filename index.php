<?php include'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<html>
<meta charset="utf-8">
  <meta name ="viewport", content="width=device-width, initial-scale=1">
<head>
	<title>TUONGEE</title>

	  <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!--/navigation  /-->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="img/image2.png"> <span>TUONGEE</span></a>
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
  <!--image slider-->
  <div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slides-to="0" class="active"></li>
      <li data-target="#slides" data-slides-to="1"></li> 
      <li data-target="#slides" data-slides-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/image1.jpg">
          <div class="carousel-caption">
          <h1 class="display-2">KARIBU TUONGEE</h1>
          <h3>TALK TO A COUNSELLOR</h3>
          <a href="login.php" class="btn btn-outline-light btn-lg">Log in</a>
          <button type="button" class="btn btn-primary btn-lg">CONTACT A COUNSELLOR</button>
        </div>
        </div>
      <div class="carousel-item">
          <img src="img/1.jpg">
        </div>
      <div class="carousel-item">
          <img src="img/3.jpg">
        </div>
    </div>
  </div>
  <!--JUMBOTRON-->
  <div class="container-fluid">
    <div class="col-xs 12  col-sm-12 col-md-9 col-lg-9 col-xl-10">
      <p class="lead">A problem talked is a problem solved.Talk to our counsellors and have a happier and more relaxing day</p>
      <!--eka link baadae-->
      </div>
      <div class="col-xs-12 col-md-3 col-lg-3 col-xl-2">
       <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">CONTACT US</button></a>
     </div>
  </div>
  <!--WELCOME SECTION-->
  <div class="container-fluid padding">
   <div class=" row welcome  text-center">
        <div class="col 12">
          <h1 class="display-4">ALWAYS  HERE TO LISTEN</h1>
          <hr>
          <div class="col-12">
            <p class="lead">At Tuongee counselling our goal is to have  open line commuications  with the counsellors help people manage their  mental health</p>
        </div>
   </div> 
  </div>
  <!--three column section-->
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
         <img src="img/icon1.png">
        <h3> Personal Therapy</h3>
        <p>Therapy for you</p>
      </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
         <img src="img/icon2.png">
        <h3> Couple Therapy</h3>
        <p>Therapy for you and your spouse</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
         <img src="img/icon3.jpg">
        <h3> Teen Therapy</h3>
        <p>Therapy for your child</p>
      </div>
  </div>
  <hr class="my-4">
</div>
<!--read blog-->
  <div class="blog-meta">
    <div class="row padding">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/anxiety3.jpg">
          <div class="card-body">
            <h4 class="card-tittle">ANXIETY</h4>
            <p class="card-text"><p>Anxiety can be normal in stressful situations such as public speaking or taking a test. Anxiety is only an indicator of underlying disease when feelings become excessive, all-consuming and interfere with daily living.</p>
            <a href="blog.html" class="btn btn-outline-secondary">Read more</a>
          </div>
        </div>
      </div>

           <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/bipolar1.jpg">
          <div class="card-body">
            <h4 class="card-tittle">bipolar</h4>
            <p class="card-text">Bipolar disorder, also known as manic-depressive illness, is a brain disorder that causes unusual shifts in mood, energy, activity levels, and the ability to carry out day-to-day tasks. </p>
            <a href="blog.html" class="btn btn-outline-secondary">Read more</a>
          </div>
      </div>
      </div>

       <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/depression.png">
          <div class="card-body">
            <h4 class="card-tittle">depression</h4>
            <p class="card-text">A mental health disorder characterised by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life.</p>
            <a href="john.html" class="btn btn-outline-secondary">Read More</a>
          </div>

      </div>
      </div>
      
      </div>
      </div>
<!--fixed background-->
 <figure>
   <div class="fixed-wrap">
     <div id="fixed"></div>
   </div>
 </figure>
<!--emoji section
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
  <div class="row text-center">
    <div class="col-sm-6 col-md-3">
       <img class="gif" src="img/wink.gif">
    </div>
  </div>
</div>  
</div>
-->
<!--meet the team-->
<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class=" col-12">
      <h1 class="display-4">MEET THE TEAM</h1>
    </div>
    <hr>
  </div>
  </div>
  <!--cards-->
  <div class="container-fluid padding">
    <div class="row padding">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/person1.jpg">
          <div class="card-body">
            <h4 class="card-tittle">John Doe</h4>
            <p class="card-text">John is an expirienced counsellor that deals with mainly anxiety...</p>
            <a href="john.html" class="btn btn-outline-secondary">See Profile</a>
          </div>
      </div>
      </div>

       <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/person1.jpg">
          <div class="card-body">
            <h4 class="card-tittle">Mary Jo</h4>
            <p class="card-text">John is an expirienced counsellor that deals with mainly anxiety...</p>
            <a href="john.html" class="btn btn-outline-secondary">See Profile</a>
          </div>
      </div>
      </div>

       <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/person1.jpg">
          <div class="card-body">
            <h4 class="card-tittle">Phill Ho</h4>
            <p class="card-text">John is an expirienced counsellor that deals with mainly anxiety...</p>
            <a href="john.html" class="btn btn-outline-secondary">See Profile</a>
          </div>
      </div>
      </div>
    </div>
  </div>
  <!-- two column section-->
  <div class="container-fluid padding">
 <div class="row padding">
   <div class=" col-md-12 col-lg-6">
    <h2>PHILOSOPHY</h2>
     <p>create a counseling environment and develop an alliance within which client revelation and change and personal growth are realized.</p>
     <br>
   </div>
   <div class=" col-lg-6">
    <img src="img/image3.jpg" class="image-fluid">
   </div>
 </div>
 <hr class="my-4">
</div>

<!--connect-->
<div class="container-fluid  padding">
  <div class="row text-center  padding">
       <div class="col-12">
         <h2>Connect</h2>
       </div>
       <div class="col-12 social  padding">
         <a href="#"><i class=" fab fa-facebook"></i></a>
          <a href="#"><i class=" fab fa-twitter"></i></a>
             <a href="#"><i class=" fab fa-google-plus-g"></i></a>
            <a href="#"><i class=" fab fa-instagram"></i></a>
             <a href="#"><i class=" fab fa-youtube"></i></a>
       </div>
  </div>
</div>
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
</body>
<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
</html>
