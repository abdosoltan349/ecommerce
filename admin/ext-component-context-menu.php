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
    <title>Context Menu - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/extensions/jquery.contextMenu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/extensions/toastr.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/extensions/context-menu.css">
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
                            <h2 class="content-header-title float-left mb-0">Context Menu</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Context Menu
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
                <!-- context-menu Starts -->
                <section id="context-menu">
                    <div class="row">
                        <!-- Basic context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a basic context menu use <code>$.contextMenu()</code> and the add your target with
                                            <code>{selector: "myId"}</code> and then create your items for menu with
                                            <code>{items:{"name" : "item 1"}}</code>
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="basic-context-menu">
                                            Right Click On Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic context menu ends -->

                        <!-- left click context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Click</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a context menu which pops up on left click use <code>{trigger : "left"}</code>.
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="left-click-context-menu">
                                            Left Click On Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- left click context menu ends -->

                        <!-- submenu context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            You can create context menu with sub menus by using <code>{fold}</code> and adding menu items inside of
                                            it.
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="submenu-context-menu">
                                            With Submenu
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- submenu context menu ends -->

                        <!-- hover context menu starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hover</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            To create a context menu which pops on hover use <code>{trigger : true}</code>
                                        </p>
                                        <button class="btn btn-primary mr-1 mb-1" type="button" id="hover-context-menu">
                                            Hover Over Me
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- hover context menu ends -->
                    </div>
                </section>
                <!-- context-menu Ends -->

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
    <script src="<?php echo $vendors ?>js/extensions/jquery.contextMenu.min.js"></script>
    <script src="<?php echo $vendors ?>js/extensions/jquery.ui.position.min.js"></script>
    <script src="<?php echo $vendors ?>js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/extensions/context-menu.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>