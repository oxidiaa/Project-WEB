<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "db_hotel";

$conn = new mysqli($localhost, $username, $password, $database);

 if (isset($_POST["login"])) {
  $email=$_POST['email'];
  $password=$_POST['password'];

  $result=mysqli_query($conn, "SELECT * FROM tb_daftar WHERE email='$email'");
  if (mysqli_num_rows($result) === 1) {
    $row=mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
        echo"berhasil <a href='index.html'></a>";
      # code...
    }
    # code...
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <link rel="icon" href="images/vector_hotel.png" type="image/gif" />
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
 
   <title>Tiketing</title>
 
   <!-- slider stylesheet -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <!-- fonts style -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
 
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />
 
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <a class="navbar-brand d-none d-lg-flex" href="index.html">
              <span>
                Hotel Karawang
              </span>
            </a>
            <!-- <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand d-lg-none" href="index.html">
              <span>
                Hotel Karawang
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider-bg">
        <img src="images/mercure-hotel.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-lg-6">
                  <div class="detail-box">
  <form action="ceklogin.php" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
  </form>
</body> 
  <div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>