<?php
include ("post_function.php");
include ("admin_header.php");
//include ("admin_footer.php");
require_once 'component.php';
?>
<main>
    <centre>
    <div class="container text-center ">
        <h1 class=" col-xl-10 col-lg-9 col-md-8 py-4 bg-dark text-light rounded">POSTS</h1>
        <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
                 <div class="py-2">
                   <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "ID",""); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>","topic", "topic",""); ?>
                </div>
                <div class="pt-2">
                <?php inputElement("<i class='fas fa-book'></i>","body", "body",""); ?>
                </div>
             <div class="row pt-2">
                    <div class="col">
                         
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                    <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>

                    </div>
                    <div class="col">
                    <?php inputElement("<i class='fas fa-people-carry'></i>","author", "author",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                       
                       
                        <?php deleteBtn();?>
                 </div>
        </form>
        </div>  
        <!--bootstrap table-->
        <div class="d-flex-table-data">
            <table class="table table-striped-table-dark">
               <thead class="thead-dark">
                  <tr>
                      <th>ID</th>
                      <th>TOPIC</th>
                      <th>BODY</th>
                      <th>BODY DETAIL</th>
                      <th>IMAGE</th>
                      <th>AUTHOR</th>
                      <th>UPDATE</th>
                      
                  </tr> 
               </thead>  
               <tbody id="tbody">

               <?php


if(isset($_POST['read'])){
    $result = getData();

    if($result){

        while ($row = mysqli_fetch_assoc($result)){ ?>
            
            <tr>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['ID']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['topic']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['body']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['body_detail']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row['image']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo  $row['author']; ?></td>
                <?php
                echo "<td><a href=\"edit.php?ID=$row[ID]\">Edit</a>|<a href=\"delete.php?ID=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        ?>
    </tr>
            

<?php
        }

    }
}


?>
               </tbody>
            </table>
        </div>
        <!--end of bootstrap table--> 
        </div>
    </centre>
</main>
<div class="col-lg-6 text-center">
                <p>&copy; 2018 Copyright<i class="fas fa-heart text-danger"></i> by <span class="text-success">tuongee</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/adjs.js"></script>
  </body>
</html>