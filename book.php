<?php
include "client/client_header.php";
?>
<!DOCTYPE html> 
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<title>BOOK</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/styles.css" rel='stylesheet' type='text/css' />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>



<body>

			
			
							
			<centre>				
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form action="#" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>First Name</p>
					<input type="text" name="Patient Name" placeholder="" required=""/>
			</div>
			<div class="gaps">
				<p>Last  Name</p>
					<input type="text" name="Patient Name" placeholder="" required=""/>
			</div>	
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="Number" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>	
				
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Select Date</p>		
						<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			<div class="gaps">
				<p>Department</p>	
					<select class="form-control">
						<option></option>
						<option>Anger management</option>
						<option>Depression therapy</option>
						<option>Couple therapy</option>
						<option>Marriage therapy</option>
						<option>Personal therapy</option>	
					</select>
			</div>
			<div class="gaps">
				<p>Gender</p>	
					<select class="form-control">
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
			</div>
			<div class="gaps">
				<p>Time</p>		
					<input type="text" id="timepicker" name="Time" class="timepicker form-control" value="">	
			</div>
			</div>
		<!-- Submit Section -->
		<div class="submit-section proceed-btn text-right">
								<a href="checkout.php" class="btn btn-primary submit-btn">Proceed to Pay</a>
							</div>
							<!-- /Submit Section -->
			</form>
		</div>
   </div>
			</centre>				
							
							
							
			<!-- /Page Content -->
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


<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>


</html>