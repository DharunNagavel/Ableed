<?php
    include "./layout/header.php";
    include "./layout/sidebar.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
    <div class="pagetitle ">
      <h1 class="text-info">Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-info"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active text-info">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div>
      <img src="./assets/img/abl.png" alt="" class="img-fluid" style="width:20%;margin-left:40%"><br><br>
      <h1 style="margin-left:80px">Welcome to ABleed – A World of Inclusive Learning</h1><br>
      <h5 style="text-align:justify">At ABleed, we believe that learning should have no barriers. Our platform is designed to empower individuals who are blind, deaf, or mute, providing them with the tools and knowledge to communicate, learn, and grow independently.</h5>
    </div><br>
    <div class="d-flex justify-content-evenly">
    
      <div class="card bg-secondary" style="width: 18rem;">
      <img src="./assets/img/8943858.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title text-info" style="margin-top:50px">Blind</h5>
      <p class="card-text text-white"> We provide learning for the blind people,it will be useful for their rest of the life</p>
      <a href="./brille c1.php" class="btn btn-dark">Get Started</a>
      </div>
      </div>

      <div class="card bg-secondary" style="width: 18rem;">
      <img src="./assets/img/istockphoto-1341530683-612x612.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title text-info" style="margin-top:86px">Deaf and Mute</h5>
      <p class="card-text text-white"> We provide learning for the Deaf and Mute people,it will be useful for their rest of the life</p>
      <a href="./lipc1.php" class="btn btn-dark">Get Started</a>
      </div>
      </div>
</div>
      <div>
          <i class="bi bi-person"></i>
          <span>About us</span>
          <div style="margin-left:20px">
            <i class="bi bi-phone"></i>
            <span>contact us</span>
            <h6>Phone Number :8668008781</h6>
            <h6>Mail Address : viswanth1256@gmail.com</h6>
            <h6>Insta page : ABleed_learning</h6>
          </div>

      </div>

    

    </body>
    </html>
<?php
include "./layout/footer.php";
?>

