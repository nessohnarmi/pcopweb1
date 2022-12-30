<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM footers";
$result = $db->query($sql);
  ?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h3 class="page-title"><b>Footer page</b></h3>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div><br><br>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
                        <main>

              
                    <div class="row">
                        <div class="col-md-12">
                
                            <form action="footer_insert.php" method="POST">
                                <p><b>Add footer Logo :</b> <input name="name" type="text" class="form-control" placeholder="Enter your logo"></p>
                                <p><b>Footer text :</b> <input name="text" type="text" class="form-control" placeholder="Enter your text" ></p>
                                <p><b>Address :</b> <input name="address" type="address"class="form-control" placeholder="Enter your address" ></p>
                                <p><b>Mobile No :</b> <input name="mobile_no" type="number" placeholder="Enter your mobile no" class="form-control" required></p>
                                <p><b>Email :</b> <input name="email" type="email" class="form-control" placeholder="Enter your email" required></p>
                            
                        
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
               
                </main>
        </div>
   </div>

    <div class="row justify-content-center">
        <div class="col-md-5">  
                      <h5> <a class="btn btn-info" href="footer_users.php">  <b>Footer users page</b></a>  </h5>        
        </div>
    


    </div>



</div><br>







<?php include 'include/footer.php' ; ?>