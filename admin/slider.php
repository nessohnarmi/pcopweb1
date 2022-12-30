<?php include 'include/header.php' ; ?>


<div class="row justify-content-center">




   
        <div class="col-md-5">
        <h1><b>slider Page</b></h1><hr><br><br>
        <form action="slider_insert.php" method="POST"  enctype="multipart/form-data">
            <p><b>Title</b> : <input name="name" type="text" class="form-control" placeholder="Enter your title"></p>      
            <p><b>Image</b> : <input type="file" value=""  name="image" id="image"  class="form-control" placeholder="Enter Image"/></p><br>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        </div>
    


</div><br><br><br><br><br><br>







<div class="row justify-content-center">
        <div class="col-md-5">  
                      <h5> <a class="btn btn-info" href="slider_users.php">  <b>slider users page</b></a>  </h5>        
        </div>
    


</div>


                    


<br>
<br>



<?php include 'include/footer.php' ; ?>