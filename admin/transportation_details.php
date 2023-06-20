<?php
$image = $_GET['image'];
$caption = urldecode($_GET['caption']); // Retrieve the full caption from the URL parameter
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Transportation - Visit Jaybee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/logo.png" type="image/ico">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" scrset=""></span>&nbsp;&nbsp;Visit Jaybee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="indexadmin.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="aboutadmin.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="galleryadmin.php" class="nav-link">Places</a></li>
          <li class="nav-item"><a href="translationadmin.php" class="nav-link">Translation Services</a></li>
          <li class="nav-item active"><a href="transportationadmin.php" class="nav-link">Transport and Routes</a></li>
          <li class="nav-item"><a href="tripadmin.php" class="nav-link">Trip Planning</a></li>
        </ul>
        <?php if (!empty($uid)) { ?>
          <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
        <?php } else { ?>
          <a href="login.html" class="btn btn-outline-primary my-2 my-sm-0">Login</a>
        <?php } ?>
      </div>
    </div>
  </nav>
  
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-3 bread">Transport and Routes</h1>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section bg-light">
    <div class="container">
      <!-- Display the full caption -->
      <div class="row">
        <div class="col-md-12">
        <p><<?php echo $image; ?></p>
        <p><?php echo $caption; ?></p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Include the footer and necessary scripts from your original file -->
</body>
</html>
