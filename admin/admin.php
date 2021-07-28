<?php
include 'db.php';
include "post_function.php";
include "admin_header.php";
//include "admin_footer.php";
require_once("component.php");

?>
<!DOCTYPE html>
<html>
  
  <body>
	<!-- cards -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-file-alt fa-3x text-warning"></i>
                      <div class="text-right text-secondary">
                        <h5>Topics</h5>
                        <h3>10</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
					<span>Updated Now</span>
					<a href="topics.php" class="btn btn-info" role="button">Update Now</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-file-alt  fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>posts</h5>
                        <h3>10</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
					<span>Updated Now</span>
					<a href="posts.php" class="btn btn-info" role="button">Update Now</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Users</h5>
                        <h3>15,000</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
					<span>Updated Now</span>
					<a href="users.php" class="btn btn-info" role="button">Update Now</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-chart-line fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>reports</h5>
                        <h3>5</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
					<span>Updated Now</span>
					<a href="reports.php" class="btn btn-info" role="button">Update Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!-- end of cards -->
	 <!-- tables -->
	 <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">counselors</h3>
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Name</th>
                      <th>Specialization</th>
                      <th>Date</th>
                      <th>Contact</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>John</td>
                      <td>teen therapy</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Ann</td>
                      <td>personal therapy</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Mark</td>
                      <td>bipolar</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Mary</td>
                      <td>anxiety</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Bob</td>
                      <td>all therapy/td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                  </tbody>
				</table>
				
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
	<!-- end of tables -->
  <!--footer-->
  <div class="col-lg-6 text-center">
                <p>&copy; 2018 Copyright<i class="fas fa-heart text-danger"></i> by <span class="text-success">tuongee</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
	
	
<!-- Bootstrap core JavaScript-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>