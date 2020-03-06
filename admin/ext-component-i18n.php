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
    <title>i18n - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">i18n</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">i18n
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
                <!-- internationalization starts -->

                <section id="internationalization">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Locale</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="language-options checkbox">
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" checked="" value="false" data-lng="en_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">English</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="fr_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">French</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="de_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">German</span>
                                            </div>
                                            <div class="vs-radio-con vs-radio-primary mb-1">
                                                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="pt_p">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Portuguese</span>
                                            </div>
                                        </div>

                                        <div class="card border mt-3 card-localization">
                                            <div class="card-header">
                                                <h4 class="card-title">Card Title</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-text" data-i18n="key">
                                                        Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups
                                                        muffin halvah lollipop. Chocolate cake oat cake tiramisu marzipan sugar plum. Donut sweet pie oat
                                                        cake dragée fruitcake cotton candy lemon drops.
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

                <!-- internationalization starts -->

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
    <script src="layout/js/scripts/extensions/i18n.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>