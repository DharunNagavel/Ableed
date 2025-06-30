<?php
include "db.php";
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sqlstmt="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sqlstmt);
    
    if(mysqli_num_rows($result) >0)
    {
        $row=mysqli_fetch_array($result);
        $_SESSION['user']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['time']=$row['created_at'];
        header("location:dashboard.php");
    }
    else
    {
        $msg="email/password incorrect";
        $_SESSION['error']=$msg;
        header("location:index.php");
    }
}
else
{
    $msg='email/password should not be empty';
    $_SESSION['error']=$msg;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="./assets/img/abl.png" rel="icon">
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
              
              <div class="card bg-secondary border border-secondary mb-3 border rounded-5">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center text-info pb-0 fs-4">Login</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="text-info form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text bg-dark text-info border border-secondary" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="text-white bg-dark border border-secondary form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="text-info form-label">Password</label>
                      <input type="password" name="password" class="text-white bg-dark border border-secondary form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      </div>
                      <div class="col-12">
                        <button class="btn btn-dark w-100 text-info" type="submit">Login</button>
                      </div>
                        <p class="d-flex justify-content-center"><a class="text-info" href="register.php">Click here</a> to Create new Account</p>
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