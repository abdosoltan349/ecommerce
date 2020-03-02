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
    <title>Dropdowns - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Dropdowns</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dropdowns
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
                <!-- Basic Dropdowns Start -->
                <section id="basic-dropdown">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Primary
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle mr-1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Success
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle mr-1" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Info
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-danger dropdown-toggle mr-1" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Danger
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-warning dropdown-toggle mr-1" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Warning
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-light dropdown-toggle mr-1" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Light
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <div class="dropdown">
                                                <button class="btn btn-dark dropdown-toggle mr-1" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dark
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Dropdown End -->

                <!-- Split Button Dropdown Starts -->
                <section id="dropdown-with-split-btn">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To create a split button add class <code>.dropdown-toggle-split</code> with your dropdown toggle class
                                            And to add divider between dropdown item use class <code>.doprdown-divider</code>
                                        </p>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item active" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <h6 class="dropdown-header">Header</h6>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item disabled" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-light">Light</button>
                                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-dark">Dark</button>
                                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Button Dropdown Ends -->

                <!-- Outline Dropdown Starts -->
                <section id="dropdown-with-outline-btn">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a dropdown with split button use <code>.btn-outline-</code> with your dropdown toggle
                                        </p>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Primary
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item active" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Success
                                            </button>
                                            <div class="dropdown-menu">
                                                <h6 class="dropdown-header">Header</h6>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Info
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item disabled" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button class="btn btn-outline-danger">
                                                Danger
                                            </button>
                                            <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-warning">Warning</button>
                                            <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group dropdown mr-1 mb-1">
                                            <button type="button" class="btn btn-outline-light">Light</button>
                                            <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Dropdown Ends -->

                <!-- Flat Dropdown Start -->
                <section id="flat-dropdown">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flat</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To create a flat dropdown use <code>.btn-flat-*</code> with your dropdown-toggle</p>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-primary dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Primary
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton100">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-success dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Success
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-info dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton300" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Info
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton300">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-danger dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton400" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Danger
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-warning dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton500" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Warning
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton500">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-light dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton600" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Light
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton600">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn btn-flat-dark dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton700" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dark
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton700">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Flat Dropdown Ends -->

                <!-- Basic Dropdowns Start -->
                <section id="gradient-dropdown">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gradient</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-primary dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton101" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Primary
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-success dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton202" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Success
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton202">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-info dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton303" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Info
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton303">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-danger dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton404" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Danger
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton404">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-warning dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton505" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Warning
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton505">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <div class="dropdown">
                                                <button class="btn bg-gradient-dark dropdown-toggle mr-1 mb-1" type="button" id="dropdownMenuButton707" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dark
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton707">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Dropdown End -->

                <!-- Dropdown Sizes Starts -->
                <section id="dropdown-sizes">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create dropdown with you can use <code>.btn-lg</code> for large and <code>.btn-sm</code> for Small with
                                            your <code>.btn</code> class
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="btn-group mr-1 mb-1">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Large
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Option 1</a>
                                                            <a class="dropdown-item" href="#">Option 2</a>
                                                            <a class="dropdown-item" href="#">Option 3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group mr-1 mb-1">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Default
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Option 1</a>
                                                            <a class="dropdown-item" href="#">Option 2</a>
                                                            <a class="dropdown-item" href="#">Option 3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group mr-1 mb-1">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Small
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Option 1</a>
                                                            <a class="dropdown-item" href="#">Option 2</a>
                                                            <a class="dropdown-item" href="#">Option 3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="btn-group dropdown mr-1 mb-1">
                                                    <button type="button" class="btn btn-primary btn-lg ">
                                                        Large
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown mr-1 mb-1">
                                                    <button type="button" class="btn btn-primary">
                                                        Default
                                                    </button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown mr-1 mb-1">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        Small
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Option 1</a>
                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown Sizes Ends -->

                <!-- Dropdown Direction Starts -->
                <section id="dropdown-directions">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Directions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can use drop from diffrent direction to use drop from bottom right use
                                            <code>.dropdown-menu-right</code> with your <code>.dropdown-menu</code>. for drop up use
                                            <code>.dropup</code> as a wrapper. for drop right use <code>.dropright</code> as wrapper. for
                                            drop left use <code>.dropleft</code> as a wrapper.
                                        </p>
                                        <div class="direction-dropdown-default mt-1">
                                            <div class="btn-group mr-1 mb-1">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Drop bottom right
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item active" href="#">Option 1</a>
                                                        <a class="dropdown-item" href="#">Option 2</a>
                                                        <a class="dropdown-item" href="#">Option 3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group dropup mr-1 mb-1">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Drop up
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item disabled" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropright mr-1 mb-1">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Drop right
                                                </button>
                                                <div class="dropdown-menu">
                                                    <h6 class="dropdown-header">Header</h6>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropleft mr-1 mb-1">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Drop left
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item disabled" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown Direction End -->

                <!-- Dropdown variations Starts -->
                <section id="dropdown-variations">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Variations</h4>
                                </div>
                                <div class="card-body">
                                    <p>To create a dropdown with groups you can use <code>.dropdown-header</code> for the header of groups
                                        and for sepration of group you can use <code>.dropdown-divider</code>.
                                    </p>
                                    <p>
                                        To create a dropdown with icons use class <code>.dropdown-icon-wrapper</code> with your dropdown
                                        and you class class <code>.dropdown-icon</code> with the default <code>&lt;i&gt;</code> tag.
                                    </p>
                                    <div class="btn-group dropup mr-1 mb-1">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton902" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Groups
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton902">
                                            <h6 class="dropdown-header">Group 1</h6>
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <div class="dropdown-divider"></div>
                                            <h6 class="dropdown-header">Group 2</h6>
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <div class="dropdown-divider"></div>
                                            <h6 class="dropdown-header">Group 3</h6>
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup dropdown-icon-wrapper mr-1 mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Icons
                                        </button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather icon-wifi dropdown-icon"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-item">
                                                <i class="feather icon-wifi-off"></i>
                                            </span>
                                            <span class="dropdown-item">
                                                <i class="feather icon-volume-2"></i>
                                            </span>
                                            <span class="dropdown-item">
                                                <i class="feather icon-volume-x"></i>
                                            </span>
                                            <span class="dropdown-item">
                                                <i class="feather icon-bell"></i>
                                            </span>
                                            <span class="dropdown-item">
                                                <i class="feather icon-bell-off"></i>
                                            </span>
                                            <span class="dropdown-item">
                                                <i class="feather icon-phone-off"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="btn-group dropup mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Form
                                        </button>
                                        <div class="dropdown-menu">
                                            <form class="px-2 py-2">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                        <label class="form-check-label" for="dropdownCheck">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">New around here? Sign up</a>
                                            <a class="dropdown-item" href="#">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown variations Ends -->

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