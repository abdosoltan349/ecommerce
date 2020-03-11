<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>checkout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
 
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="layout/css/checkout-css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="layout/css/checkout-css/bootstrap.css">
    <!-- Theme style  -->
	<link rel="stylesheet" href="layout/css/checkout-css/style.css">

	
	</head>
	<body>
		

	<div id="page">
		
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(layout/images/checkout-images/Banner---Shopping.jpg);">
			   		<div class="overlay"></div>
			    </li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form method="post" class="colorlib-form">
							<h2>Billing Details</h2>
		              	<div class="row">
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="country">Select Country</label>
			                     <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select name="people" id="people" class="form-control">
				                      	<option value="#">Select country</option>
				                        <option value="#">Alaska</option>
				                        <option value="#">China</option>
				                        <option value="#">Japan</option>
				                        <option value="#">Korea</option>
				                        <option value="#">Philippines</option>
			                        </select>
			                     </div>
			                  </div>
			               </div>
			               <div class="form-group">
									<div class="col-md-6">
										<label for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="Your firstname">
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="Your lastname">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Company Name</label>
			                    	<input type="text" id="companyname" class="form-control" placeholder="Company Name">
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Address</label>
			                    	<input type="text" id="address" class="form-control" placeholder="Enter Your Address">
			                  </div>
			                  <div class="form-group">
			                    	<input type="text" id="address2" class="form-control" placeholder="Second Address">
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Town/City</label>
			                    	<input type="text" id="towncity" class="form-control" placeholder="Town or City">
			                  </div>
			               </div>
			               <div class="form-group">
									<div class="col-md-6">
										<label for="stateprovince">State/Province</label>
										<input type="text" id="fname" class="form-control" placeholder="State Province">
									</div>
									<div class="col-md-6">
										<label for="lname">Zip/Postal Code</label>
										<input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<label for="email">E-mail Address</label>
										<input type="text" id="email" class="form-control" placeholder="State Province">
									</div>
									<div class="col-md-6">
										<label for="Phone">Phone Number</label>
										<input type="text" id="zippostalcode" class="form-control" placeholder="Phone number">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="radio">
										  <label><input type="radio" name="optradio">ship to my delivery address</label>
										  <label><input type="radio" name="optradio"> ship to a nearby pickup location </label>
										</div>
									</div>
								</div>
                            <div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
									   <label><input type="checkbox" value="">I have read and accept the terms and conditions</label>
									</div>
								</div>
							</div>
		              </div>
		            </form>
					</div>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>$??</span>
									<ul>
										<li><span>1 x Product Name</span> <span>$??</span></li>
										<li><span>1 x Product Name</span> <span>$??</span></li>
									</ul>
								</li>
								<li><span>Shipping</span> <span>$??</span></li>
								<li><span>Order Total</span> <span>$??</span></li>
							</ul>
						</div>
						<div class="cart-detail">
							<h2>Payment Method</h2>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">cash on dilivery <i class="fa fa-truck" style="font-size:20px;"></i>
</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Paypal <i class="fa fa-cc-paypal" style="font-size:20px;color:black"></i></label>
									</div>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<p><a href="#" class="btn btn-primary">Place an order</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	<!-- jQuery -->
	<script src="layout/js/checkout-js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="layout/js/checkout-js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="layout/js/checkout-js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="layout/js/checkout-js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="layout/js/checkout-js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="layout/js/checkout-js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="layout/js/checkout-js/jquery.magnific-popup.min.js"></script>
	<script src="layout/js/checkout-js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="layout/js/checkout-js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="layout/js/checkout-js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="layout/js/checkout-js/main.js"></script>
        </div>
	</body>
</html>

