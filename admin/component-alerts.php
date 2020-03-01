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
    <title>Alerts - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Alerts</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Alerts
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
                <!-- Basic Alerts start -->
                <section id="basic-alerts">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Alerts are available for any length of text, as well as an
                                            optional dismiss button. Add
                                            <code>.alert.alert-{color}</code> classes for alert with all theme
                                            colors.
                                        </p>
                                        <div class="alert alert-primary mb-2" role="alert">
                                            <strong>Good Morning!</strong> Start your day with some alerts.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Alerts end -->

                <!-- Alerts with Title start -->
                <section id="alerts-with-title">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Title
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add a title to the alert with the <code>.alert-heading</code></p>
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading">Lorem ipsum dolor sit amet</h4>
                                            <p class="mb-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Ducimus, laborum!.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alerts with Title end -->

                <!-- Alert Colors start -->
                <section id="alert-colors">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Colors
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Alerts are available for any length of text, as well as an
                                            optional dismiss button. Add
                                            <code>.alert.alert-{color}</code> classes for alert with all theme
                                            colors.
                                        </p>
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading">Primary</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Danger</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading">Warning</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            <h4 class="alert-heading">Dark</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <h4 class="alert-heading">Info</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            <h4 class="alert-heading">Light</h4>
                                            <p class="mb-0">
                                                Tootsie roll lollipop lollipop icing. Wafer cookie danish
                                                macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alert Colors End -->

                <!--Closable Alerts start -->
                <section id="alerts-closable">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Closable Alerts</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add a dismiss button and the
                                            <code>.alert-dismissible</code> class, which adds extra padding to
                                            the right of the alert and positions the
                                            <code>.close button</code>.
                                        </p>
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                                                wafer I love wafer.
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <p>
                                            You can also change the icon used for the close buton on the
                                            alerts
                                        </p>
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                                Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                                                wafer I love wafer.
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Closable Alerts end -->

                <!-- Alert With Icon start -->
                <section id="alerts-with-icons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Alert With Icon
                                        </p>
                                        <div class="alert alert-primary" role="alert">
                                            <i class="feather icon-star mr-1 align-middle"></i>
                                            <span>
                                                Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                                                wafer I love wafer.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alert With Icon end -->

                <!-- Example Alert start -->
                <section id="alert-example">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Example</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            An example would be to have an input and when a condition is met,
                                            show the alert. use class <code>.alert-validation</code> for your input and class
                                            <code>.alert-validation-msg</code> with your alert.
                                        </p>
                                        <form>
                                            <label for="numbers">Enter Only Numbers</label>
                                            <input id="numbers" class="form-control w-25 h-25 pl-1 alert-validation" type="text" placeholder="0123456789" />
                                        </form>
                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                            <i class="feather icon-info mr-1 align-middle"></i>
                                            <span>the value is <strong>invalid</strong> you can only enter numbers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Example Alert end -->

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