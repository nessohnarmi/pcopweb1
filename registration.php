<!-- header -->
<?php include 'include/header.php' ; ?>
<br><br>




        <main>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <h1><b>Registration Page</b></h1><hr>
                    <form action="registration_insert.php" method="POST">
                        <p>Name : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                        <p>Email : <input name="email" type="email" class="form-control" placeholder="Enter your email" required></p>
                        <p>Password: <input name="password" type="password" class="form-control" placeholder="Enter the password" required></p>
                        <p>Mobile No : <input name="mobile_no" type="number" placeholder="Enter your mobile no" class="form-control"></p>
                        <!-- <p>Image : <input name="image" type="image" placeholder="Enter your mobile no" class="form-control"></p> -->
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                    </div>
                </div>
            </div>

        </main>

        <br>
        <br>

<!-- footer -->
<?php include 'include/footer.php' ; ?>