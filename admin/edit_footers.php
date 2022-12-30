<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM footers WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    //var_dump($data);
?>


<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="page-title">Edit page</h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
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
            <div class="row">
              <div class="col-md-8">
               
                    <form action="update_footer.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <p> <b>Add footer Logo :</b><input name="name" type="text" value="<?php echo $data['logo'] ; ?>" class="form-control" placeholder="Enter your logo"></p>
                        <p><b>Footer text :</b> <input name="text" type="text"  value="<?php echo $data['text'] ; ?>" class="form-control" placeholder="Enter your text" ></p>
                        <p><b>Address :</b>  <input name="address" type="address" value="<?php echo $data['address'] ; ?>" class="form-control" placeholder="Enter the address" ></p>
                        <p><b>Mobile No :</b><input name="mobile_no" value="<?php echo $data['mobile_no'] ; ?>" type="number" placeholder="Enter your email" class="form-control"required></p>
                        <p><b>Email :</b> <input name="email" type="email"  value="<?php echo $data['email'] ; ?>" class="form-control" placeholder="Enter your email" required></p>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>