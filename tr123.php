<?php




 $hostname ="localhost";
 $username ="root";
 $password ="";
 $database ="tuongee";
 // Create connection
 $db= mysqli_connect($hostname,$username,$password) or die("Connection Failed........!!!");
 mysqli_select_db($db,$database) or die("Database not selected....!!!");


//details data

function details(){

	global $db;


	if(isset($_GET['ID'])){

		$ID = $_GET['ID']; 
 
    $get_pro = "select * from posts where ID = '$ID'";
    $run_pro = mysqli_query($db,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){

        $ID = $row_pro['ID'];
        $topic = $row_pro['topic'];
        $body_detail= $row_pro['body_detail'];
        $image = $row_pro['image']; 
        $author = $row_pro['author'];
       
        


    echo"
                  

                 <div class='center_title_bar'></div>
                 <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
        <div class='product_title_big'>TOPIC:$topic</div>
        <div class='product_img_big'> <a href='javascript:popImage('img/$image','Some Title')' title='header=[<img src=img/$image>] body=[&nbsp;] fade=[on]'><img src='img/$image' height=200 width=185 alt='' border='0' /></a>
        </div>
          <div class='details_big_box'>
            
            
            <div class='prod_price_big'> <span class='price'>$body_detail</span></div>
            <div class='specifications'>Author:
              $author
              </div>
          
            </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div>







    ";
      }
  }
}
?>
