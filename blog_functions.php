


<?php

include 'tr.php';
function readBlog(){
  $hostname ="localhost";
$username ="root";
$password ="";
$database ="tuongee";
  $db= mysqli_connect($hostname,$username,$password) or die("Connection Failed........!!!");
  mysqli_select_db($db,$database) or die("Database not selected....!!!");
    $get_pro = "select * from posts";
        $run_pro = mysqli_query($db,$get_pro);
       
    
    
        while($row_pro = mysqli_fetch_array($run_pro)){
    
    
            $ID = $row_pro['ID'];
            $topic= $row_pro['topic'];
            $body = $row_pro['body'];
            $image = $row_pro['image'];
            $author = $row_pro['author'];
            
           
       
    
    
            echo"
                   
                    <div class='prod_box'>
            <div class='top_prod_box'></div>
            <div class='center_prod_box'>
              <div class='product_title'><a href='details.php?ID=$ID'>$topic</a></div>
     <div class='prod_price'><span class='price'> $body</span></div>
              <div class='product_img'><a href='details.php?ID=$ID'><img src='images/$image' alt='' border='0' width='90' height='110' /></a></div>
              <div class='prod_price'><span class='price'> $author</span></div>
            </div>
            <div class='bottom_prod_box'></div>
            <div class='prod_details_tab'> <a href='allproducts.php?addcart=$ID' title='header=[Add to cart] body=[&nbsp;] fade=[on]''></a>
              <a href='details.php?ID=$ID' class='prod_details'>Read More</a> </div>
          </div> ";
    
    
        }
    
    
    
    
     
    
}
?>
