<?php
include 'db.php';

require_once 'header.php';
include "functions.php";
?>
<?php
//session_start();
if (!isset($_SESSION['LoginUser']))
{
   // header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<div class=" contain row" >
         <div class="com-md-6">
                 <h2 class="text-center">LOGIN</h2><hr/>
                <form action="functions.php" method="POST">
                      <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" placeholder="please enter your username">                       
                    </div>
                         
                         <div class="form-group">
                           <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="please enter your password">                        
                            <p class="text-centre" style="color: red";>
                              <?php echo $message; ?>
                            </p>
                        </div>
                           <div class="form-group">
                             <input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
                             <a href="register.php" class="btn btn-primary" role="button">Register</a>
                           </div>
                        </form>
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
<script type="text/javascript" src="js.jquery.min.js"></script>
<script type="text/javascript" src="js.bootstrap.min.js"></script>
<script type="text/javascript" src="js.popper.min.js"></script>
</body>
</html>