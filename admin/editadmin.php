<?php
 include "init.php";
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
    <title>Edit admin</title>
    
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
                            <h2 class="content-header-title float-left mb-0">Edit Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="admins.php">Admins</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Admin
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
                                    <h4 class="card-title">Edit Admin</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal" novalidate action = "updateadmin.php" method = "post" id="editadmin">
                                            <div class="row">
                                                <div class="col-md-12">
												 
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <div class="controls">
															<input  name="adminid" hidden value ="<?php echo  $_GET['id']; ?>" type="text" form="editadmin">
                                                            <input name="adminname" form="editadmin" value ="<?php echo  $_GET['name']; ?>" type="text"  class="form-control" data-validation-required-message="This field is required" placeholder="Name">
                                                        </div>
                                                    </div>
													 <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="controls">
                                                            <input form="editadmin" value ="<?php echo  $_GET['email']; ?>" type="email" name="adminemail" class="form-control" data-validation-required-message="Must be a valid email" placeholder="Email">
                                                        </div>
                                                    </div>
												<div class="form-group">
													<label>Role</label>
                                                <fieldset class="form-group">
                                                    <select form="editadmin" name = "adminrole" class="form-control" id="basicSelect">
                                                        <option Value = "Admin" <?php if($_GET['role'] == "Admin"){echo "selected";} ?>>Admin</option>
                                                        <option Value = "Supervisor" <?php if($_GET['role'] == "Supervisor"){echo "selected";} ?> >Supervisor</option>
                                                        <option Value = "Accountant"<?php if($_GET['role'] == "Accountant"){echo "selected";} ?> >Accountant</option>
                                                    </select>
                                                </fieldset>
												</div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <div class="controls">
                                                            <input form="editadmin" type="password" name="adminpassword" class="form-control" data-validation-required-message="This field is required" placeholder="Password">
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <button form="editadmin" type="submit" class="btn btn-primary">Submit</button>
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