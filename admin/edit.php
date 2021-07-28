<?php
include ("post_function.php");
include ("admin_header.php");
include ("db.php");
//include ("admin_footer.php");
require_once 'component.php';
?><?php
if (isset($_POST['submit']))
{
$id=$_POST['id'];
$topic=mysqli_real_escape_string($db, $_POST['topic']);
$body=mysqli_real_escape_string($db, $_POST['body']);
$body_detail=mysqli_real_escape_string($db, $_POST['body_detail']);
$image=mysqli_real_escape_string($db, $_POST['image']);

$author=mysqli_real_escape_string($db, $_POST['author']);

//updating the table
mysqli_query($db,"UPDATE posts SET topic='$topic', body='$body', body_detail='$body_detail', image='$image', author='$author' WHERE ID='$id'");


echo"<script>alert('Product Edited Succesfully')</script>";
echo"<script>window.open('posts.php?tn=$r','_self')</script>";


}


if (isset($_GET['ID']) && is_numeric($_GET['ID']) && $_GET['ID'] > 0)
{

$ID = $_GET['ID'];
$result = mysqli_query($db,"SELECT * FROM posts WHERE ID=".$_GET['ID']);

$row = mysqli_fetch_array($result);

if($row)
{

  $ID = $row['ID'];
  $topic = $row['topic'];
  $body = $row['body'];
  $body_detail = $row['body_detail'];
  $image = $row['image']; 
  $author = $row['author'];
}
else
{
echo "No results!";
}
}
?>
<!DOCTYPE html>
<html>
    <body>
    <h5 class="card-title">Edit this Records <span class="text-danger"></span></h5>
    <form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $ID; ?>"/>
	 
      <div class="form-row ">
     <div class="form-group">

	    <div class="form-group">
            <label>Topic <span class="text-danger"></span></label>
            <input type="text" name="topic" id="topic" value="<?php echo $topic; ?>" required>
        </div>
        <div class="form-group">
            <label>body <span class="text-danger"></span></label>
            <input type="text" name="body" id="body" value="<?php echo $body; ?>" required>
        </div>
        <div class="form-group">
            <label>body_detail <span class="text-danger"></span></label>
            <input type="text" name="body_detail" id="body_detail" value="<?php echo $body_detail; ?>" required>
        </div>
      <div class="form-group">
	  <div class="dbtainer">
	  <div class="row">
	  <div class="col">
      <label>Blog Image <span class="text-danger"></span></label>
	  </div>
      <div class="col">
	   <img width="150" height="150" src="../img/<?php echo $image;?>" alt="<?php echo $image;?>" >
	  </div>
      <br><br>
	  <div class="col">
      <input name="image" type="file">
	  </div>
	  </div>
	  </div>
        <div class="form-group">
            <label>Blog Author <span class="text-danger"></span></label>
            <input type="text" name="author" id="author" value="<?php echo $author; ?>" required>
        </div>
       
        <div class="form-group">
		<div class="col-sm-8">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='manage.php';" class="btn btn-primary">Cancel</button>
    </div>
    <br><br>
		<div class="col-sm-4">
            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Update Record</button>
		</div>
        </div>
    </form>


		</div>
               
                
                    
        </div>
		
        <!-- main dbtent area end -->
        <!-- footer area start-->
       
        <!-- footer area end-->
    </div>
	</div>
	</div>
	</div>
	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
	
    <!-- page dbtainer area end -->
    <!-- offset area start -->
<style>
.form-row{
  padding: 0.3em 1.4em;
  margin: 1em 10em;
  
}
.form-group{
  padding: 0.3em 1.4em;
  margin: 1em 10em;
}

.input[type=text], .select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  
}
.table{
  border: 1px solid black;
  align-dbtent: center;
  align-items: center;
  margin: 1em 10em;
  
  }
   .table{
    margin: 1em 10em;
   width: 100%;
   align-dbtent: center;
  align-items: center;
  margin: 1em 10em;
}
th{
  width:40px;
  font-size: 14px;

}
.td{font-size: 12px;}
.btn {
  

  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 13px;
  cursor: pointer;
  background:green;
}

/* Darker background on mouse-over */

.circular--square {
  border-radius: 50%;
}
</style>
           
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="css/js/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/js/owl.carousel.min.js"></script>
    <script src="css/js/metisMenu.min.js"></script>
    <script src="css/js/jquery.slimscroll.min.js"></script>
    <script src="css/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51905a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <link rel="stylesheet" href="Inventmng/srtdash/assets/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-idb/css/material-design-idbic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-idb/css/material-design-idbic-font.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
    <script src="css/js/adjs.js"></script>
  </body>
</html>