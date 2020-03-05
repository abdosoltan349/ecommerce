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
    <title>Badges - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Badges</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Badges
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
                <!-- Basic Badges start -->
                <section id="basic-badges">
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Secondary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-secondary</code>class within element to create
                                            secondary badge.</p>
                                        <div class="badge badge-secondary">Secondary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Primary Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-primary</code>class within element to create
                                            primary badge.</p>
                                        <div class="badge badge-primary">Primary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Success Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-success</code>class within element to create
                                            success badge.</p>
                                        <div class="badge badge-success">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Danger Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-danger</code>class within element to create
                                            danger badge.</p>
                                        <div class="badge badge-danger">Danger</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Info Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-info</code>class within element to create info
                                            badge.</p>
                                        <div class="badge badge-info">Info</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Warning Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Use the <code>.badge</code> class, followed by<code>.badge-warning</code>class within element to create
                                            warning badge.</p>
                                        <div class="badge badge-warning">Warning</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Badges end -->

                <!-- Badges With Icons Starts -->
                <section id="badges-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badges With Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge badge-primary mr-1 mb-1">
                                            <i class="feather icon-facebook"></i>
                                            <span>Primary</span>
                                        </div>
                                        <div class="badge badge-success mr-1 mb-1">
                                            <i class="feather icon-instagram"></i>
                                            <span>Success</span>
                                        </div>
                                        <div class="badge badge-danger mr-1 mb-1">
                                            <i class="feather icon-github"></i>
                                            <span>Danger</span>
                                        </div>
                                        <div class="badge badge-info mr-1 mb-1">
                                            <i class="feather icon-twitter"></i>
                                            <span>Info</span>
                                        </div>
                                        <div class="badge badge-warning mr-1 mb-1">
                                            <i class="feather icon-sun"></i>
                                            <span>Warning</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges With Icons End -->

                <!-- Square Badges With Icons Starts -->
                <section id="square-badges-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Badges With Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use class <code>.badge-square</code> with <code>.badge</code> to make your badge square</p>
                                        <div class="badge badge-square badge-primary mr-1 mb-1">
                                            <i class="feather icon-facebook"></i>
                                            <span>Primary</span>
                                        </div>
                                        <div class="badge badge-square badge-success mr-1 mb-1">
                                            <i class="feather icon-instagram"></i>
                                            <span>Success</span>
                                        </div>
                                        <div class="badge badge-square badge-danger mr-1 mb-1">
                                            <i class="feather icon-github"></i>
                                            <span>Danger</span>
                                        </div>
                                        <div class="badge badge-square badge-info mr-1 mb-1">
                                            <i class="feather icon-twitter"></i>
                                            <span>Info</span>
                                        </div>
                                        <div class="badge badge-square badge-warning mr-1 mb-1">
                                            <i class="feather icon-sun"></i>
                                            <span>Warning</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Badges With Icons Ends -->

                <!-- Badges With Only Icons Starts -->
                <section id="badges-only-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badges With Only Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge badge-primary mr-1 mb-1">
                                            <i class="feather icon-facebook"></i>
                                        </div>
                                        <div class="badge badge-success mr-1 mb-1">
                                            <i class="feather icon-instagram"></i>
                                        </div>
                                        <div class="badge badge-danger mr-1 mb-1">
                                            <i class="feather icon-github"></i>
                                        </div>
                                        <div class="badge badge-info mr-1 mb-1">
                                            <i class="feather icon-twitter"></i>
                                        </div>
                                        <div class="badge badge-warning mr-1 mb-1">
                                            <i class="feather icon-sun"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badges With Only Icons Ends -->


                <section id="badges-with-links">
                    <div class="row match-height">
                        <!-- Badges With Links And Dropdown And Block Badges starts -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Link Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p class="text-left">Use <code>&lt;a&gt;</code> tag inside your <code>.badge</code> to create a badge with
                                            icon</p>
                                        <div class="badge badge-primary">
                                            <a href="https://Error 404.com/" target="_blank">
                                                <i class="feather icon-link"></i>
                                                <span>Link Badge</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Dropdown Badge</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p class="text-left">Use <code>.dropdown-toggle</code> class with your badge text to create a badge with
                                            dropdown</p>
                                        <div class="btn-group">
                                            <div class="badge badge-primary dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <span>Dropdown Badge</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Dropdown Badge With Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p>Add icon before your dropdown toggle text to create a dropdown toggle with icon</p>
                                        <div class="btn-group">
                                            <div class="badge badge-primary dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <i class="feather icon-disc"></i>
                                                    <span>Dropdown Badge</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Badges With Links And Dropdown And Block Badges ends -->

                        <!-- Block Badges start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Block Badge With Link</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p class="text-left">Use <code>.block</code> class with <code>.badge</code>, to display badge as a block
                                            element.</p>
                                        <div class="badge block badge-primary">
                                            <span>Badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Block Badge With Link And Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p class="text-left">Add your icon inside <code>&lt;a&gt;</code> tag class to make your block badge a link
                                        </p>
                                        <div class="badge block badge-success">
                                            <a href="https://Error 404.com/" target="_blank">
                                                <i class="feather icon-link"></i>
                                                <span>Link Badge</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Block Badge With Link And Only Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <p class="text-left">Inside your <code>.badge.block</code> add only icon to display your badge as a block
                                            icon</p>
                                        <div class="badge block badge-danger">
                                            <a href="https://Error 404.com/" target="_blank"><i class="feather icon-link-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block Badges end -->

                <!-- Badge Sizes Starts -->
                <section id="badge-sizes">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badge Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use classes <code>badge-{xl|lg|md|sm}</code> to change size of a badge</p>
                                        <div class="badge badge-primary badge-xl mr-1 mb-1">Extra Large</div>
                                        <div class="badge badge-primary badge-lg mr-1 mb-1">Large</div>
                                        <div class="badge badge-primary badge-md mr-1 mb-1">Medium</div>
                                        <div class="badge badge-primary badge-sm mr-1 mb-1">Small</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Badge Sizes Ends -->

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