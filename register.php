<?php
include "db.php";
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sqlstmt="INSERT INTO admin(name,email,password)VALUES('$name','$email','$password')";
    $result=mysqli_query($con,$sqlstmt);
    
    if($result)
   {
    header("location:index.php");
   }
}
else
{
    $msg='name/email/password should not be empty';
    $_SESSION['error']=$msg;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sign up</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/abl.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center ">


              <div class="card bg-secondary mb-3 border border-secondary rounded-5">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center text-info pb-0 fs-4">Sign up</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                  <div class="col-12">
                      <label for="name" class="text-info form-label">Name</label>
                      <input type="text" name="name" class="form-control bg-dark border border-secondary text-white" id="name" required>
                      <div class="invalid-feedback">Please enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="text-info form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text bg-dark text-info border border-secondary" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="border border-secondary bg-dark text-white form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="text-info form-label">Password</label>
                      <input type="password" name="password" class="bg-dark border border-secondary text-white form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <!-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div> -->
                    </div>
                    <div class="col-12">
                      <button class="btn btn-dark w-100 text-info" type="submit">Sign up</button>
                    </div>
                    <!-- <p style="margin-left:70px"><a href="register.php">Click Here </a>to Create New account</p> -->
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>