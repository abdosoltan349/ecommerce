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
    <title>Chips - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Chips</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extra Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Chips
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
                <!-- Default chips starts -->
                <section id="default-chips">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Default Chips
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Helps you represent simple data with Various options.you can create a chip by using <code>.chip</code> and
                                            <code>.chip-body</code>. to add avatar use class <code>.avatar</code> inside <code>.chip-body</code>.
                                            use class <code>.chip-text</code> for chip text.
                                        </p>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text"> Basic Chip</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <div class="avatar-content">
                                                        LD
                                                    </div>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <span><i class="feather icon-user"></i></span>
                                                </div>
                                                <span class="chip-text">Avatar Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <img class="img-fluid" src="<?php echo $images ?>portrait/small/avatar-s-2.jpg" alt="generic img placeholder" height="20" width="20">
                                                </div>
                                                <span class="chip-text">Avatar Image</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Chip Closeable</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Default chips ends -->

                <!-- Colored Chips Starts -->
                <section id="colored-chips">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colors</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>use class <code>.chip-{color-name}</code> with <code>.chip</code> to change background color of chip.</p>
                                        <div class="chip chip-primary mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Primary chip</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-success mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <div class="avatar-content">
                                                        LD
                                                    </div>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-info mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <span><i class="feather icon-user"></i></span>
                                                </div>
                                                <span class="chip-text">Avatar Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-warning mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <img class="img-fluid" src="<?php echo $images ?>portrait/small/avatar-s-2.jpg" alt="generic img placeholder" height="20" width="20">
                                                </div>
                                                <span class="chip-text">Avatar Image</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-danger mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Avatar Closeable</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Colored Chips Ends -->

                <!-- Colored Avatar Starts -->
                <section id="colored-avatar">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colored Avatar</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can change background color of avatar by using <code>.bg-{color-name}</code> with
                                            <code>.avatar</code></p>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar bg-primary">
                                                    <span>VS</span>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar bg-success">
                                                    <span>HT</span>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar bg-info">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar bg-danger">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar bg-warning">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <span class="chip-text">Avatar Text</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Colored Avatar Ends -->

                <!-- Icons Chips Starts -->
                <section id="icons-chips">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To add icons in your chips wrap them inside <code>.avatar</code></p>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <span class="chip-text">Default chip</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-primary mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-share"></i>
                                                </div>
                                                <span class="chip-text">Share Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-success mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-mail"></i>
                                                </div>
                                                <span class="chip-text">Mail Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-danger mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-slash"></i>
                                                </div>
                                                <span class="chip-text">Block Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-warning mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-battery"></i>
                                                </div>
                                                <span class="chip-text">Battery Icon</span>
                                            </div>
                                        </div>
                                        <div class="chip chip-info mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-edit"></i>
                                                </div>
                                                <span class="chip-text">Edit Icon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icons Chips Ends -->

                <!-- Closeable Chips Starts -->
                <section id="closeable-chips">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Closeable</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To make your chip closeable use class <code>.chip-closeable</code></p>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Dribble</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Github</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Behance</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Vue Js</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Vuexy</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Closeable Chips Ends -->

                <!-- Customized Closeable Chips Starts -->
                <section id="closeable-chips-customized">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Customized Closeable Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You can change closeable icon by wrapping your preferred icon in <code>.chip-closeable</code></p>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Dribble</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-trash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Github</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-trash-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Behance</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-delete"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Vue Js</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-minus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chip mr-1">
                                            <div class="chip-body">
                                                <span class="chip-text">Vuexy</span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Customized Closeable Chips Ends -->

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