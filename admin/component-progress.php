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
    <title>Progress - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Progress</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Progress
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
                <!-- Basic Progress start -->
                <section id="basic-progress">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Progress</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <div class="text-center" id="example-caption-1">Reticulating splines&hellip; 0%</div>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-describedby="example-caption-1"></div>
                                        </div>

                                        <div class="text-center" id="example-caption-2">Reticulating splines&hellip; 25%</div>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width:25%" aria-describedby="example-caption-2"></div>
                                        </div>

                                        <div class="text-center" id="example-caption-3">Reticulating splines&hellip; 50%</div>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%" aria-describedby="example-caption-3"></div>
                                        </div>

                                        <div class="text-center" id="example-caption-4">Reticulating splines&hellip; 75%</div>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="75" aria-valuemax="100" style="width:75%" aria-describedby="example-caption-4"></div>
                                        </div>

                                        <div class="text-center" id="example-caption-5">Reticulating splines&hellip; 100%</div>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%" aria-describedby="example-caption-5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Progress end -->

                <!-- Colored Progress start -->
                <section id="colored-progress">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colored Progress</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use class <code>.progress-bar-{color-name}</code>. to choose color of your choice</p>
                                        <div class="progress progress-bar-primary">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%"></div>
                                        </div>
                                        <div class="progress progress-bar-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                        </div>
                                        <div class="progress progress-bar-danger">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                        </div>
                                        <div class="progress progress-bar-info">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%"></div>
                                        </div>
                                        <div class="progress progress-bar-warning">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Colored Progress end -->

                <!-- Labeled Progress start -->
                <section id="labeled-progress">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Labeled Progress</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%">20%</div>
                                        </div>
                                        <div class="progress progress-bar-success progress-lg">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%">40%</div>
                                        </div>
                                        <div class="progress progress-bar-danger progress-lg">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%">60%</div>
                                        </div>
                                        <div class="progress progress-bar-info progress-lg">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%">80%</div>
                                        </div>
                                        <div class="progress progress-bar-warning progress-lg">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Labeled Progress end -->

                <!-- Striped Progress start -->
                <section id="striped-progress">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Striped Progress</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Uses a gradient to create a striped effect, add <code>.progress-bar-striped</code> with <code>.progress-bar</code> class.</p>
                                        <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%"></div>
                                        </div>
                                        <div class="progress progress-bar-success progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                        </div>
                                        <div class="progress progress-bar-danger progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                        </div>
                                        <div class="progress progress-bar-info progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%"></div>
                                        </div>
                                        <div class="progress progress-bar-warning progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Striped Progress end -->

                <!-- Animated Progress start -->
                <section id="animated-progress">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Animated Progress</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>To get progressbar with animated effect, add <code>.progress-bar-animated</code> with <code>.progress-bar</code> class.</p>
                                        <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%"></div>
                                        </div>
                                        <div class="progress progress-bar-success progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                        </div>
                                        <div class="progress progress-bar-danger progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                        </div>
                                        <div class="progress progress-bar-info progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%"></div>
                                        </div>
                                        <div class="progress progress-bar-warning progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Animated Progress end -->

                <!-- Progress Sizes start -->
                <section id="progress-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Progress Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>For Default progress, No size class needed. you can use class <code>.progress-{sm|md|lg|xl}</code>
                                            with <code>.progress</code> to change size of your progress bar.
                                        </p>
                                        <div class="progress progress-bar-primary progress-xl">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%;"></div>
                                        </div>
                                        <div class="progress progress-bar-success progress-lg">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%;"></div>
                                        </div>
                                        <div class="progress progress-bar-danger progress-md">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%;"></div>
                                        </div>
                                        <div class="progress progress-bar-info progress-sm">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Progress Sizes end -->

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