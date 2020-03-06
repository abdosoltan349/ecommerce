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
    <title>Input Groups - Vuexy - Bootstrap HTML admin template</title>
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
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/plugins/forms/form-inputs-groups.css')-->
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
                            <h2 class="content-header-title float-left mb-0">Input Groups</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input Groups
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
                <!-- Basic Inputs Groups start -->
                <section id="basic-input-groups">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Input Groups</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> for input-group-prepend and add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code> for input-group-append.</p>
                                        <div class="row">
                                            <div class="col-md-4 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-4 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Addon To Right" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-4 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Addon On Both Side" aria-label="Amount (to the nearest dollar)">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs Groups end -->

                <!-- Inputs Group Checkbox and Radio Buttons end -->
                <section id="input-group-checkbox-radio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Groups with Checkboxes and Radios</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Input Groups can use with checkboxes and radio buttons also. For it add code for <code>.vs-checkbox-con</code> class and <code>.vs-radio-con</code>.</p>
                                        <div class="row">
                                            <div class="col-sm-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" checked value="false">
                                                                    <span class="vs-checkbox vs-checkbox-sm">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="vueradio" value="false">
                                                                    <span class="vs-radio vs-radio-sm">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with radio button">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inputs Group Checkbox and Radio Buttons end -->

                <!-- Inputs Group Sizes -->
                <section id="input-group-size">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Groups with different sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.input-group-{lg/sm}</code> class to <code>.input-group</code> for Large/Small addon/prepend.</p>
                                        <div class="row">
                                            <div class="col-sm-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="sizing-addon1">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Large Addon" aria-describedby="sizing-addon1">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="sizing-addon3">@example.com</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Small Addon" aria-describedby="sizing-addon3">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inputs Group Sizes end -->

                <!-- Inputs Group with Buttons -->
                <section id="input-group-buttons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Groups with Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-btn</code> class and add button inside <b>before</b> or <b>after</b> <code>&lt;input&gt;</code>.</p>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Button on right" aria-describedby="button-addon2">
                                                        <div class="input-group-append" id="button-addon2">
                                                            <button class="btn btn-primary" type="button">Go</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button"><i class="feather icon-search"></i></button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Button on both side" aria-label="Amount">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button">Search !</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inputs Group with Buttons end -->

                <!-- Inputs Group with Dropdown -->
                <section id="input-group-dropdown">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Groups with Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add dropdown-menu after it to get input group with dropdown.</p>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Dropdown on left">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 mb-1">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Dropdown on both side" aria-label="Amount">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Inputs Group with Dropdown end -->

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