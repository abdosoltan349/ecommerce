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
    <title>Swiper - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/extensions/swiper.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/extensions/swiper.css">
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
                            <h2 class="content-header-title float-left mb-0">Swiper</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Swiper
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
                <!-- default swiper start -->
                <section id="component-swiper-default">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-default swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-1.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-2.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-4.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-13.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-7.jpg" alt="banner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- default swiper ends -->

                <!-- navigations swiper start -->
                <section id="component-swiper-navigations">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Navigations</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-navigations swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-7.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-4.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-14.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-3.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-2.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- navigations swiper ends -->

                <!-- pagination swiper start -->
                <section id="component-swiper-pagination">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pagination</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-paginations swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-12.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-9.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-8.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-7.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-20.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- pagination swiper ends -->

                <!-- progress swiper start -->
                <section id="component-swiper-progress">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Progress</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-progress swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-8.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-7.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-20.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-5.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-4.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- progress swiper ends -->

                <!-- Multiple Slides Per View swiper start -->
                <section id="component-swiper-multiple">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Slides Per View</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-multiple swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-31.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-32.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-33.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-34.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-35.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multiple Slides Per View swiper ends -->

                <!-- Multi row Slides Per View swiper start -->
                <section id="component-swiper-multi-row">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Multi Row Slides Layout</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-multi-row swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-26.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-39.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-28.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-29.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-30.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-31.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-32.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-33.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-34.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-35.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multi row Slides Per View swiper ends -->

                <!-- centered-slides swiper option-1 start -->
                <section id="component-swiper-centered-slides">
                    <div class="card bg-transparent shadow-none">
                        <div class="card-header">
                            <h4 class="card-title">Centered Slides option-1</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-centered-slides swiper-container p-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded swiper-shadow"> <i class="feather icon-gitlab font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Getting Started</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow"> <i class="feather icon-facebook font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Pricing & Plans</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow"> <i class="feather icon-twitter font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Sales Question</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow"> <i class="feather icon-instagram font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">Usage Guides</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow"> <i class="feather icon-github font-large-1"></i>
                                            <div class="swiper-text pt-md-1 pt-sm-50">General Guide</div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- centered-slides swiper option-1 ends -->

                <!-- centered-slides option-2 swiper start -->
                <section id="component-swiper-centered-slides-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Centered Slides option-2</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <div class="swiper-centered-slides-2 swiper-container p-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
                                            <i class="feather icon-twitter mr-50 font-medium-3"></i>
                                            <div class="swiper-text">Getting Started</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
                                            <i class="feather icon-facebook mr-50 font-medium-3"></i>
                                            <div class="swiper-text">Pricing & Plans</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
                                            <i class="feather icon-gitlab mr-50 font-medium-3"></i>
                                            <div class="swiper-text">Sales Question</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
                                            <i class="feather icon-instagram mr-50 font-medium-3"></i>
                                            <div class="swiper-text">Usage Guides</div>
                                        </div>
                                        <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
                                            <i class="feather icon-github mr-50 font-medium-3"></i>
                                            <div class="swiper-text">General Guide</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- centered-slides option-2 swiper ends -->

                <!-- Fade Effect swiper start -->
                <section id="component-swiper-fade-effect">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Fade Effect</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-fade-effect swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-20.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-19.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-18.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-17.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-16.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Fade Effect swiper ends -->

                <!-- 3d cube effect swiper start -->
                <section id="component-swiper-cube-effect">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">3-D cube Effect</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-cube-effect swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-21.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-22.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-23.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-24.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 3d cube effect swiper ends -->

                <!-- coverflow effect swiper start -->
                <section id="component-swiper-coverflow">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">3d Effect Coverflow Effect</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-coverflow swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-35.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-39.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-38.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-37.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-36.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-34.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-33.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-32.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-31.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- coverflow effect swiper ends -->

                <!-- autoplay swiper start -->
                <section id="component-swiper-autoplay">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Autoplay</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-autoplay swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-20.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-7.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-8.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-9.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-10.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-11.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- autoplay swiper ends -->

                <!-- gallery swiper start -->
                <section id="component-swiper-gallery">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Gallery</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-gallery swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-11.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-12.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-13.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-14.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-15.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper mt-25">
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-11.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-12.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-13.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-14.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $images ?>banner/banner-15.jpg" alt="banner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- gallery swiper ends -->

                <!-- parallax swiper start -->
                <section id="component-swiper-parallax">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Parallax</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Swiper -->
                                <div class="swiper-parallax swiper-container">
                                    <div class="parallax-bg" data-swiper-parallax="-23%"><img class="img-fluid" src="<?php echo $images ?>banner/parallax-4.jpg" alt="banner"> </div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="title" data-swiper-parallax="-300">Slide 1</div>
                                            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                                            <div class="text" data-swiper-parallax="-100">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit,
                                                    sit
                                                    amet faucibus felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet
                                                    consectetur..</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Slide 2
                                            </div>
                                            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                                            <div class="text" data-swiper-parallax="-100">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit,
                                                    sit
                                                    amet faucibus felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Veniam reiciendis provident atque quod obcaecati voluptatibus ex qui
                                                    repudiandae
                                                    sunt dolores. Nulla laoreet justo vitae porttitor porttitor.
                                                    Suspendisse in sem justo. Integeo. Aenean feugiat non
                                                    eros quis feugiat.</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="title" data-swiper-parallax="-300">Slide 3</div>
                                            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                                            <div class="text" data-swiper-parallax="-100">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit,
                                                    sit
                                                    amet faucibus felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Veniam reiciendis provident atque quod obcaecati voluptatibus ex qui
                                                    repudiandae
                                                    sunt dolores. Nulla laoreet justo vitae porttitor porttitor.
                                                    Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                                                    euismod. Aliquam hendrerit lnt ut libero. Aenean feugiat non
                                                    eros quis feugiat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Navigation -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- parallax swiper ends -->

                <!-- Lazy loading swiper start -->
                <section id="component-swiper-lazy">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Lazy Loading</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-lazy-loading swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                                            <img src="<?php echo $images ?>banner/banner-9.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <!-- Preloader image -->
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $images ?>banner/banner-8.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $images ?>banner/banner-7.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $images ?>banner/banner-20.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $images ?>banner/banner-5.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $images ?>banner/banner-4.jpg" class="swiper-lazy img-fluid" alt="banner">
                                            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                        </div>
                                    </div>

                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                    <!-- Navigation -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Lazy loading swiper ends -->

                <!-- Responsive Breakpoints swiper start -->
                <section id="component-swiper-responsive-breakpoints">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Responsive Breakpoints</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="swiper-responsive-breakpoints swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-30.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-31.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-32.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-33.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-34.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-35.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-36.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-37.jpg" alt="banner">
                                        </div>
                                        <div class="swiper-slide"><img class="img-fluid" src="<?php echo $images ?>banner/banner-38.jpg" alt="banner">
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Responsive Breakpoints swiper ends -->

                <!-- virtual slides swiper start -->
                <section id="component-swiper-virtual">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Virtual Slides</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Swiper -->
                                <div class="swiper-virtual swiper-container mb-1">
                                    <div class="swiper-wrapper"></div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <p class="text-center">
                                    <a href="#" class=" btn btn-primary prepend-2-slides font-small-3 mr-md-1 mb-md-0 mb-1">Prepend 2
                                        Slides</a>
                                    <a href="#" class=" btn btn-primary slide-1 font-small-3 mr-md-1 mb-md-0 mb-1">Slide 1</a>
                                    <a href="#" class=" btn btn-primary slide-250 font-small-3 mr-md-1 mb-md-0 mb-1">Slide 250</a>
                                    <a href="#" class=" btn btn-primary slide-500 font-small-3 mr-md-1 mb-md-0 mb-1">Slide 500</a>
                                    <a href="#" class=" btn btn-primary append-slide font-small-3 mr-md-1 mt-md-1 mb-1">Append Slide</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- virtual slides swiper ends -->

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
    <script src="<?php echo $vendors ?>js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/extensions/swiper.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>