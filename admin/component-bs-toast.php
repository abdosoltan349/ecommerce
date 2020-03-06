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
    <title>Toasts - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Toasts</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Toasts
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
                <!-- Start of Bootstrap Toasts -->
                <section id="bootstrap-toasts">

                    <!-- Translucent toast and basic toasts starts  -->
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Toast</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        Toasts are as flexible as you need and have very little required markup. At a minimum, we
                                        require a single element to contain your “toasted” content and strongly encourage a dismiss
                                        button.
                                    </p>
                                    <div class="btn btn-outline-primary toast-toggler mt-2">Toast</div>
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                        <div class="toast-header">
                                            <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast image">
                                            <strong class="mr-auto">Vue Admin</strong>
                                            <small>11 mins ago</small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                    <div class="toast-bs-container">
                                        <div class="toast-position">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Translucent</h4>
                                    <p class="mt-1">Toasts are slightly translucent, too, so they blend over whatever they might appear
                                        over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the
                                        elements under a toast.</p>
                                </div>
                                <div class="card-content bg-dark">
                                    <div class="card-body">
                                        <div class="toast toast-wrapper toast-translucent" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast image">
                                                <strong class="mr-auto">Vue Admin</strong>
                                                <small>11 mins ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Translucent toast and basic toasts starts  -->

                    <!-- toast stacking and placement starts -->
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title">Stacking</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mt-1">When you have multiple toasts, we default to vertically stacking them in a readable
                                            manner.</p>
                                        <div class="btn btn-outline-primary toast-toggler mt-2 mr-1">Auto Hide Off</div>
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                                            <div class="toast-header">
                                                <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast Image">
                                                <strong class="mr-auto">Vue Admin</strong>
                                                <small class="text-muted">just now</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                See? Just like this.
                                            </div>
                                        </div>
                                        <div class="btn btn-outline-success toast-toggler mt-2 mr-1">Toast</div>
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                            <div class="toast-header">
                                                <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast Image">
                                                <strong class="mr-auto">Vue Admin</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="title">Placement</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mt-1">You can place toasts with custom CSS as you need them, put the positioning styles
                                            right on the <code>.toast</code>. or You can also get fancy with flexbox utilities to align toasts
                                            horizontally and/or vertically.
                                        </p>
                                        <div class="btn btn-outline-info placement mt-2">Toast Placement</div>
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                                            <div class="toast-header">
                                                <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast Image">
                                                <strong class="mr-auto">Vue Admin</strong>
                                                <small class="text-muted">2 seconds ago</small>
                                                <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Heads up, toasts will stack automatically
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- toast stacking and placement starts -->
                </section>
                <!-- End of Bootstrap Toasts -->

                <!-- Fixed Center Toast Starts -->

                <div aria-live="polite" aria-atomic="true" class="toast-placement d-flex justify-content-center align-items-center" data-autohide="false">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                        <div class="toast-header">
                            <img src="<?php echo $images ?>logo/logo.png" class="rounded mr-2" alt="Toast Image">
                            <strong class="mr-auto">Vue Admin</strong>
                            <small>1 mins ago</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>
                <!-- Fixed Center Toast ends -->

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
    <script src="layout/js/scripts/pages/bootstrap-toast.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>