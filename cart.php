<!DOCTYPE html>
<!-- include file init-->
<?php
 include "init.php";
	?>
	<?php
	include $tpl."nav.php";
?>

<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>cart page</title>
	
	<!-- Web Font -->
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

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>$110.00 </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>$110.00 </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[2]" class="input-number"  data-min="1" data-max="100" value="2">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[2]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>$110.00 </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[3]" class="input-number"  data-min="1" data-max="100" value="3">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[3]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>$330.00</span></li>
										<li class="last">You Pay<span>$330.00</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn">Checkout</a>
										<a href="#" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>

	<?php
	include $tpl."footer.php";
?>

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
	<!-- Active JS -->
	<script src="<?php echo $js ?>active.js"></script>
</body>
</html>