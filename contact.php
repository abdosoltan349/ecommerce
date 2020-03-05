<!DOCTYPE html>
<?php
include "init.php"
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact US</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo $css ?>bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo $css ?>magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $css ?>font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo $css ?>jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo $css ?>themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo $css ?>niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo $css ?>animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="<?php echo $css ?>flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo $css ?>owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="<?php echo $css ?>slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="<?php echo $css ?>reset.css">
	<link rel="stylesheet" href="<?php echo $css ?>style.css">
    <link rel="stylesheet" href="<?php echo $css ?>responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
		
	
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Get in touch</h4>
									<h3>Write us a message</h3>
								</div>
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Send Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li>+123 456-789-1120</li>
										<li>+522 672-452-1120</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
										<li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap"></div>
	</div>
	<!--/ End Map Section -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	
	
 
	<!-- Jquery -->
    <script src="<?php echo $js ?>jquery.min.js"></script>
    <script src="<?php echo $js ?>jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo $js ?>jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo $js ?>popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo $js ?>bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="<?php echo $js ?>colors.js"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo $js ?>slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo $js ?>owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo $js ?>magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="<?php echo $js ?>facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo $js ?>waypoints.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="<?php echo $js ?>jquery-counterup.min.js"></script>
	<!-- Countdown JS -->
	<script src="<?php echo $js ?>finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo $js ?>nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="<?php echo $js ?>ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo $js ?>flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo $js ?>scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo $js ?>onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo $js ?>easing.js"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="<?php echo $js ?>gmap.min.js"></script>
	<script src="<?php echo $js ?>map-script.js"></script>
	<!-- Active JS -->
	<script src="<?php echo $js ?>active.js"></script>
</body>
</html>