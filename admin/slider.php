<?php include 'include/header.php' ; ?>

<div class="row justify-content-center">




   
        <div class="col-md-5">
        <h1><b>slider Page</b></h1><hr>
        <form action="slider_insert.php" method="POST">
            <p>Title : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>         
            <p>Image : <input name="image" type="file" placeholder="Enter your mobile no" class="form-control"></p><br>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        </div>
    


</div>


<br>
<br>



<?php include 'include/footer.php' ; ?>