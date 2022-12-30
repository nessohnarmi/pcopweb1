<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM abouts";
$result = $db->query($sql);
  ?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h3 class="page-title"><b>About page</b></h3>
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
                
                            <form action="about_insert.php" method="POST"  enctype="multipart/form-data">
                                <p><b>Title :</b> <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                                <p><b>History :</b> <input name="history" type="text" class="form-control" placeholder="Enter your history" ></p>
                                <p><b>Image :</b>  <input type="file" value=""  name="image" id="image"  class="form-control" placeholder="Enter Image"/></p><br>
                        
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
                      <h5> <a class="btn btn-info" href="about_users.php">  <b>Abouts users page</b></a>  </h5>        
        </div>
    


    </div>



</div><br>







<?php include 'include/footer.php' ; ?>