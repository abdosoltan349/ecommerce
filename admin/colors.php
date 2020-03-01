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
    <title>Colors - Vuexy - Bootstrap HTML admin template</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/colors.css">
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
                            <h2 class="content-header-title float-left mb-0">Colors</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Colors
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
                <!-- Background color start -->
                <section id="backcolor">
                    <div class="row">
                        <div class="col-12">
                            <div class="card background-color">
                                <div class="card-header">
                                    <h4 class="card-title">Default Colors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-0">
                                        <p class="mb-0">We have a series of colors that are used by default. They include:</p>
                                        <ul class="colors-list list-unstyled mb-0">
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>Primary
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>Success
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>Danger
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>Warning
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>Info
                                            </li>
                                        </ul>
                                        <p>For each color, we think has its functionality in the application as alerts of errors <b>(danger)</b>,
                                            warnings to the user <b>(warning)</b>, communications of approval <b>(success)</b>, or main color of the
                                            application <b>(primary)</b>.
                                            <div class="d-flex justify-content-start flex-wrap">
                                                <div class="text-center bg-primary colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50 my-1 shadow">
                                                    <span class="align-middle">primary</span>
                                                </div>
                                                <div class="text-center bg-success colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">success</span>
                                                </div>
                                                <div class="text-center bg-danger colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">danger</span>
                                                </div>
                                                <div class="text-center bg-warning colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">warning</span>
                                                </div>
                                                <div class="text-center bg-info colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center my-1 ml-50 shadow">
                                                    <span class="align-middle">info</span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Background color end -->

                <!-- Gradient color start -->
                <section id="backcolor-gradient">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gradient Colors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-0">We have make gradient color based on our default color:</p>
                                        <ul class="colors-list list-unstyled mb-0">
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>bg-gradient-primary
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>bg-gradient-success
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>bg-gradient-danger
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>bg-gradient-warning
                                            </li>
                                            <li>
                                                <i class="feather icon-chevrons-right"></i>bg-gradient-info
                                            </li>
                                        </ul>
                                        <p>For each color, we think has its functionality in the application as alerts of errors <b>(danger)</b>,
                                            warnings to the user <b>(warning)</b>, communications of approval <b>(success)</b>, or main color of the
                                            application <b>(primary)</b>.
                                            <div class="d-flex justify-content-start flex-wrap">
                                                <div class="text-center colors-container bg-gradient-primary rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50 my-1 shadow">
                                                    <span class="align-middle">primary gradient</span>
                                                </div>
                                                <div class="text-center colors-container bg-gradient-success rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">success gradient</span>
                                                </div>
                                                <div class="text-center colors-container bg-gradient-danger rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">danger gradient</span>
                                                </div>
                                                <div class="text-center colors-container bg-gradient-warning rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                                                    <span class="align-middle">warning gradient</span>
                                                </div>
                                                <div class="text-center colors-container bg-gradient-info rounded text-white width-100 height-100 d-flex align-items-center justify-content-center my-1 ml-50 shadow px-1">
                                                    <span class="align-middle">info gradient</span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Gradient color end -->

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