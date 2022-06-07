<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUS-Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    

<!--registration form-->


<section class="h-100 bg-dark" id="registration">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="reg-card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registration form</h3>
                <form action="assets/php/registration.php" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="First_Name" name='First_Name' VALUES="<?php echo $_GET['$fn'];?>" required placeholder='First Name' class="form-control form-control-lg" />
                      <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['name_valid']
                      ?></span>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="Last_Name" name='Last_Name' required placeholder='Last Name' class="form-control form-control-lg" />
                      <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['name_valid']
                      ?></span>
                    </div>
                  </div>
                </div>

               

                <div class="form-outline mb-4">
                  <input type="text" id="reg-address" class="form-control form-control-lg" required name="reg-address" placeholder='Address' />
                
                </div>

                

                         

                <div class="form-outline mb-4">
                  <input type="text" id="reg-pincode" name='reg-pincode' placeholder='Pincode' class="form-control form-control-lg" />
                
                </div>

                

                <div class="form-outline mb-4">
                  <input type="text" id="reg-mail" name='reg-mail' placeholder='e-mail id' class="form-control form-control-lg" />
                  <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['mail_valid']
                      ?></span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="reg-number" name='reg-number' placeholder='Phone Number' class="form-control form-control-lg" />
                  <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['phone_valid']
                      ?></span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="reg-password" name='reg-password' placeholder='Create Password' class="form-control form-control-lg" />
                  <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['passwd_valid']
                      ?></span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="reg-conf-password" name='reg-conf-password' placeholder='Confirm Password' class="form-control form-control-lg" />
                  <span class="error" style="color:red;margin-top:10px;"><?php
                      echo $_GET['passwd_valid']
                      ?></span>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<!--register end-->
</body>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</html>