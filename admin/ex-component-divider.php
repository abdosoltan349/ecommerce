<!DOCTYPE html>

<?php
 include "init.php";
	?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Error 404">
    <title>Divider - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php
	include $tpl."header.php";
	 ?>
  
	<?php
		include $tpl."menu.php";
	 ?>

       
  
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Divider</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extra Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Divider
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Default Divider Starts -->
                <section id="default-divider">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can add a line to divide your section using <code>&lt;hr&gt;</code></p>
                                        <p>
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.
                                        </p>
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Default Divider Ends -->
                <!-- Basic Divider Starts -->
                <section id="basic-divider">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Text</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use class <code>.divider</code> as wrapper for <code>.divider-text</code> to create a divider text</p>
                                        <div class="divider">
                                            <div class="divider-text">My Text</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Divider Ends -->
                <!-- Divider Text Position Starts -->
                <section id="divider-text-position">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Text Position</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Use class <code>.divider-{left | left-center | right | right-center}</code> with <code>.divider</code>
                                            to set text position.
                                        </p>
                                        <div class="divider divider-left">
                                            <div class="divider-text">Left</div>
                                        </div>
                                        <div class="divider divider-left-center">
                                            <div class="divider-text">Left Center</div>
                                        </div>
                                        <div class="divider">
                                            <div class="divider-text">Center(Default)</div>
                                        </div>
                                        <div class="divider divider-right-center">
                                            <div class="divider-text">Right Center</div>
                                        </div>
                                        <div class="divider divider-right">
                                            <div class="divider-text">Right</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider Text Position Ends -->

                <!-- Divider Colors Starts -->
                <section id="divider-colors">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Use class <code>.divider-{color-name}</code> to change color of divider
                                        </p>
                                        <div class="divider">
                                            <div class="divider-text">Default</div>
                                        </div>
                                        <div class="divider divider-primary">
                                            <div class="divider-text">Primary</div>
                                        </div>
                                        <div class="divider divider-success">
                                            <div class="divider-text">Success</div>
                                        </div>
                                        <div class="divider divider-danger">
                                            <div class="divider-text">Danger</div>
                                        </div>
                                        <div class="divider divider-info">
                                            <div class="divider-text">Info</div>
                                        </div>
                                        <div class="divider divider-warning">
                                            <div class="divider-text">Warning</div>
                                        </div>
                                        <div class="divider divider-dark">
                                            <div class="divider-text">Dark</div>
                                        </div>
                                        <div class="divider divider-light">
                                            <div class="divider-text">Light</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider Colors Ends -->

                <!-- Divider Icons Starts -->
                <section id="divider-icons">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="divider divider-left">
                                            <div class="divider-text"><i class="feather icon-arrow-down"></i></div>
                                        </div>
                                        <div class="divider divider-left-center">
                                            <div class="divider-text"><i class="feather icon-star"></i></div>
                                        </div>
                                        <div class="divider">
                                            <div class="divider-text"><i class="feather icon-check"></i></div>
                                        </div>
                                        <div class="divider divider-right-center">
                                            <div class="divider-text"><i class="feather icon-x-circle"></i></div>
                                        </div>
                                        <div class="divider divider-right">
                                            <div class="divider-text"><i class="feather icon-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider Icons Ends -->

                <!-- Divider Style Starts -->
                <section id="divider-style">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Style</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            use class
                                            <code>.divider-{dotted | dashed}</code> to change divider style. solid is default style you don't have to
                                            add any class for it.
                                        </p>
                                        <div class="divider divider-dotted">
                                            <div class="divider-text">Dotted</div>
                                        </div>
                                        <div class="divider divider-dashed">
                                            <div class="divider-text">Dashed</div>
                                        </div>

                                        <div class="divider">
                                            <div class="divider-text">Solid</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider Style Ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   <?php
		include $tpl."footer.php";
	 ?>


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo $vendors ?>js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>