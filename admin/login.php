<?php include 'include/header.php' ; ?>

<div class="page-wrapper">
   
    <div class="container-fluid">
        <div class="row justify-content-center">
        
           <h1>Login Page</h1><hr><br><br>
      
    <div class="container-fluid">
     
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                    <form action="login_process.php" method="POST">
                          <div class="mb-3">
                                <label for="" class="form-label"><b>Email</b></label>
                                <input type="text"
                                  class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter your email address">
                          </div>

                          <div class="mb-3">
                              <label for="" class="form-label"><b>Password</b></label>
                              <input type="text"
                                class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter the password">
                          </div>

                          <button type="submit" class="btn btn-success"><b>Submit</b></button>
                  
                    </form>
                </div>
              </div>
           </div>
      </div>


            
        </div>
  </div>

    
</div>


<?php include 'include/footer.php' ; ?>






