<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM users";
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
                <h3 class="page-title">slider_Users page</h3>
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
            <div class="col-md-8">
                <table class="table table-striped table-bordered table-hover">
                <thead>
                        <th><b>	Sl</b></th>
                        <th><b>Title</b></th>
                        <th><b>Image</b></th>
                        <th><b>Action</b></th>
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                       
                            <td><?php echo $row['Sl'] ; ?></td>
                            <td><?php echo $row['title'] ; ?></td>
                            <td><?php echo $row['image'] ; ?></td>
                        
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                       
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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