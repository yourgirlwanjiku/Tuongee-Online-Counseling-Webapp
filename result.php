<?php
include 'db.php'; 
include 'header.php';
?>
<?php

         if(isset($_GET['search'])){
         
         $search_query = $_GET['user_query'];
         
         
         $get_pro = "select * from posts where topic like '%$search_query%'";
         $run_pro = mysqli_query($db,$get_pro);
             
         
         
             while($row_pro = mysqli_fetch_array($run_pro)){
               $ID = $row_pro['ID'];
               $topic = $row_pro['topic'];
               $body = $row_pro['body'];
               $image = $row_pro['image']; 
               $author = $row_pro['author'];
              
               
          
       
       
               echo"
                       
                     <div class='blog-meta'>
                      <div class='row padding'>
               <div class='col-sm'>
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
       
            
            
       
       
               ";

             }
           }


         ?>

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