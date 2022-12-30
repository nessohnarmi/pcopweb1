<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM footers";
$result = $db->query($sql);
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
                <h3 class="page-title">footer users page</h3>
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
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th><b>ID</b></th>
                        <th><b>Add footer Logo</b></th>
                        <th><b>Footer text</b></th>
                        <th><b>Address</b></th>
                        <th><b>Mobile No</b></th>
                        <th><b>Email</b> </th>
                        <th><b>Action</b> </th>
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                       
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['logo'] ; ?></td>
                            <td><?php echo $row['text'] ; ?></td>
                            <td><?php echo $row['address'] ; ?></td>
                            <td><?php echo $row['mobile_no'] ; ?></td>
                            <td><?php echo $row['email'] ; ?></td>
                        <td>
                            <a href="edit_footers.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a><br><br>
                       
                            <a href="delete_footers.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                        </td>
                     </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>