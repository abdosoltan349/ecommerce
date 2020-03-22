<?php
 include "init.php";
 include "includes/functions/coupons.php";
   $coupons = new coupons();
 if(!isset($_GET['do'])){
	  $_GET['do']= "notset";
  }
  if($_GET["do"] == "update"){
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $id = $_POST["couponid"];
	  $name = $_POST["name"];
	  $code = $_POST["code"];
	  $value = $_POST["value"];
	 $coupons->update_coupon($id,$name,$code,$value);
	 if(strcmp($_SESSION["couponid"], $id) == 0){
		  unset($_SESSION["couponid"]);
		 unset($_SESSION["name"]);
		   unset($_SESSION["code"]);
           unset($_SESSION["value"]);
	 }
	  header("Location: coupons.php");
      exit();
  }}
	?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Edit coupon</title>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 <?php
	include $tpl."header.php";
		include $tpl."menu.php";
	 ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Coupon</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="coupon.php">Coupons</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit coupon
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
              
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit coupon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate action = "<?php echo $_SERVER["PHP_SELF"]."?do=update" ?>" method = "post" id="editadmin">
                                            <div class="row">
                                                <div class="col-md-12">
												 
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <div class="controls">
															<input  name="couponid" hidden value ="<?php echo  $_GET['id']; ?>" type="text" >
                                                            <input name="name"  value ="<?php echo  $_GET['name']; ?>" type="text"  class="form-control" data-validation-required-message="This field is required" placeholder="Name">
                                                        </div>
                                                    </div>
													 <div class="form-group">
                                                        <label>code</label>
                                                        <div class="controls">
                                                            <input value ="<?php echo  $_GET['code']; ?>" type="code" name="code" class="form-control" data-validation-required-message="Must be a valid code" placeholder="code">
                                                        </div>
                                                    </div>
											        <div class="form-group">
                                                        <label>value</label>
                                                        <div class="controls">
                                                            <input value ="<?php echo  $_GET['value']; ?>" type="value" name="value" class="form-control" data-validation-required-message="Must be a valid price" placeholder="value">
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                </div>
                                            </div>
                                            <button form="editadmin" type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

            </div>
        </div>
    </div>
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
	<?php
		include $tpl."footer.php";
	 ?>

    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo $vendors ?>js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo $vendors ?>js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
	<script src="layout/js/scripts/ui/admins.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>