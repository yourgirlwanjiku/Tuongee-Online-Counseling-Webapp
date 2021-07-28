 <?php
 //include "header.php";
 include "db.php";
 ?>
 <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
  <meta name ="viewport", content="width=device-width, initial-scale=1">
  <head>
	<title>CHAT</title>

	  <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
</head>
 <body>
     <div class="container main-section">
         <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
                <div class="input-group-btn">
               <div class="input-group-btn">
                   <centre><a href="include/find_friends.php"><button class="btn btn-default search-icon"></button></centre>

               </div>
            </div>
            </div>
         </div>

     </div>
 
 </body>
 </html>