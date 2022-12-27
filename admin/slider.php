<?php include 'include/header.php' ; ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h4 class="page-title"><b>Slider</b></h4>
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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th><b>Sl</b></th>
                        <th><b>Title</b></th>
                        <th><b>Image</b></th>
                        <th><b>Action</b></th>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Slider</td>
                        <td></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <!-- <form action="delete-user.php" method="POST">
                                    <input name="id" type="hidden" value="<?php echo $row['id'] ; ?>">
                                    <button class="btn btn-danger" type="submit" >Delete</button>
                                </form> -->
                            <a href="delete-user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>