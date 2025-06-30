<?php
    include "./layout/header.php";
    include "./layout/sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<div class="pagetitle">
      <h1 class="text-info">Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-info"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active text-info">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex justify-content-end">
            <a href="signout.php"><button class="btn btn-danger">Logout</button></a>
        </div>
        <div>
          <h3>Username :<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h3>
          <h3>Email :<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?></h3>
          <h3>Account Created at :<?php if(isset($_SESSION['time'])){echo $_SESSION['time'];}?></h3>
        </div>
        </div>
      </div>
    </section>
</body>
</html>
<?php
    include "./layout/footer.php";
?>