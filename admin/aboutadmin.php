<?php 
  
  session_start();
  if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

      $uid = $_SESSION['id'];

  }else{
      $uid = '';
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Visit Jaybee</title>
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
	    	<a class="navbar-brand" href="indexadmin.php"><img src="images/logo.png" alt="" scrset=""></span>&nbsp;&nbsp;Visit Jaybee</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="indexadmin.php" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="aboutadmin.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="gallery.html" class="nav-link">Places</a></li>
	        	<li class="nav-item"><a href="translation.html" class="nav-link">Translation Services</a></li>
	          <li class="nav-item"><a href="transportation.html" class="nav-link">Transport and Routes</a></li>
	          <li class="nav-item"><a href="trip.html" class="nav-link">Trip Planning</a></li>
	        </ul>
            <?php if(!empty($uid)){?>
            <a href="logout.php" class="btn btn-primary mr-md-4 py-3 px-4">Logout<span class="ion-ios-arrow-forward"></span></a>
          <?php }else{ ?>
      			<a href="login\Login_v8\login.html" class="btn btn-primary mr-md-4 py-3 px-4">Login<span class="ion-ios-arrow-forward"></span></a>
          <?php } ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 order-md-last">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-4.jpg);">
    					</a>
    				</div>
    				<div class="d-flex mt-3">
    					<div class="img img-2 mr-md-2" style="background-image:url(images/about-5.jpg);"></div>
    					<div class="img img-2 ml-md-2" style="background-image:url(images/about-6.jpg);"></div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
	            <h2 class="mb-3">About Visit Jaybee</h2>
	            <p><b>Visit Jaybee</b> has been powered by University Technology Malaysia (UTM) students to give opportunities to students and tourists who are interested in exploring Johor Bahru. This idea was obtained when there were many students who voiced that they do not know interesting places in Johor Bahru with reasonable prices, where they can enjoy Johor Bahru to the fullest but at student prices.</p>
    			<p>Discover the hidden gems of <b>Johor Bahru</b>, one of Malaysia's most exciting cities, where affordable prices await for those who seek adventure and exploration. Johor Bahru is a city that boasts a unique blend of modernity and tradition. The city is also known for its natural beauty, with lush parks and gardens, scenic waterways, and stunning beaches that offer breathtaking views of the sea.</p>
				<p>One of the city's most iconic landmarks is the Johor Bahru Old Chinese Temple, a historic temple that dates back to the 19th century. It is a stunning example of traditional Chinese architecture and is home to a number of intricately crafted statues and artifacts. Another must-see attraction is the Sultan Abu Bakar State Mosque, a beautiful mosque that features a blend of Moorish and Malay architectural styles. For those who love nature, the Pulai Waterfall and Gunung Pulai Recreational Forest are popular spots for hiking and picnicking. Johor Bahru is also a shopper's paradise, with a variety of malls and markets offering everything from designer goods to handmade crafts. Overall, Johor Bahru is a city that truly has something for everyone, and is a destination that should not be missed.</p>
	</section>

    <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Visit Johor Bahru</h2>
						<p>Johor Bahru is the city and the state capital of Johor in Malaysia. This city is surrounded by suburbs, industrial parks, and extended waterfront areas in the southern part of Peninsular Malaysia.</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Quick Links</h2>
						<ul class="list-unstyled">
              <li><a href="index.html" class="py-2 d-block">Home</a></li>
              <li><a href="about.html" class="py-2 d-block">About</a></li>
              <li><a href="gallery.html" class="py-2 d-block">Places</a></li>
              <li><a href="translation.html" class="py-2 d-block">Translation</a></li>
              <li><a href="transportation.html" class="py-2 d-block">Transportation</a></li>
			        <li><a href="trip.html" class="py-2 d-block">Trip</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
						<h2 class="footer-heading">Have a Questions?</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map"></span><span class="text">Section of Corporate Affairs, Sultan Ibrahim Chancellery Building, Universiti Teknologi Malaysia, 81310 Johor Bahru, Johor, Malaysia.</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+6 07-553 3333</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">corporate@utm.my</span></a></li>
              </ul>
            </div>
					</div>
				</div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
			</div>
		</footer>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>