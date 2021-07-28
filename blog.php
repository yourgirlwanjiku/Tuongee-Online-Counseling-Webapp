<?php 
include'db.php';
include'test.php';

?>
<!DOCTYPE html>
<html lang="en">
<html>
<meta charset="utf-8">
  <meta name ="viewport", content="width=device-width, initial-scale=1">
<head>
	<title>Tuongee4</title>

	  <!-- Bootstrap CSS File -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  
   <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  <link href="Style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="blog.php"><img src="img/image2.png"> <span>TUONGEE</span></a>
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
          <a class="nav-link" href="services.php"> Services</a>
        </li>
        <li>
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
       
        
        <li  class="nav-item">
          <a class="nav-link" href="user_profile.php">Contact Us</a>
        </li>
        <li>
        <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
        <form method="get" action="result.php" enctype="multipart/form-data">
  
            <div class="search">
     
     <input type="text" class="search-area" name="user_query" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type Keywords & Press enter..."/>
     <input type="submit" value="Search" class="search-btn" name="search"/>
      </div>

       </form>
          </div>
        <!-- // Search -->
       
        </li>
      </ul>
 </div>
</div>
  </nav>
  
			  
         

    <h1>Recent Blog</h1>
<?php  



$get_pro = "select * from posts";
    $run_pro = mysqli_query($db,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $ID = $row_pro['ID'];
        $topic = $row_pro['topic'];
        $body = $row_pro['body'];
        
        $image = $row_pro['image']; 
        $author = $row_pro['author'];
       
        
   


        echo"
                <centre>
              <div class='blog-meta'>
               <div class='row padding'>
		    <div class='col-md-8'>
        <div class='card'>
		<div class='card-img-top'><a href='details.php?id=$author'><img src='img/$image' alt='' ' /></a>
		<div class='card-body'>
          <div class='card-tittle'><a href='details.php?ID=$ID'>$topic</a>
          <div class='card-text'><span class='price'> $body </span></div>
       
        <div class='btn btn-outline-secondary'> <a href='allproducts.php?addcart=$ID' title='header=[Add to cart] body=[&nbsp;] fade=[on]''></a>
          <a href='details.php?ID=$ID' class='  btn btn-outline-secondary'>read more</a> 
       </div>
      </div>
	  </div>
    </div>
    </div>
    
    </div>
    
    </div>

     </centre>
     


        ";


    }




 ?>

<!--asdfg-->

    

<!--end of content-->

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
