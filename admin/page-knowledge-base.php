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
    <title>Knowledge-base - Vuexy - Bootstrap HTML admin template</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/knowledge-base.css">
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
                            <h2 class="content-header-title float-left mb-0">Knowledge-base</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Knowledge-base
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
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg white">
                                <div class="card-content">
                                    <div class="card-body p-sm-4 p-2">
                                        <h1 class="white">Dedicated Source Used on Website</h1>
                                        <p class="card-text mb-2">
                                            Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
                                        </p>
                                        <form>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control form-control-lg" id="searchbar" placeholder="Search Topic or Keyword">
                                                <div class="form-control-position">
                                                    <i class="feather icon-search px-1"></i>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base Jumbotron ends -->
                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row search-content-info">
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-1.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>SALES AUTOMATION</h4>
                                        <small class="text-dark">Muffin lemon drops chocolate carrot cake chocolate bar sweet roll.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-2.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>MARKETING AUTOMATION</h4>
                                        <small class="text-dark">Gingerbread sesame snaps wafer soufflé. Macaroon brownie ice cream</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-3.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>MARKETING BI</h4>
                                        <small class="text-dark">cotton candy caramels danish chocolate cake pie candy. Lemon drops tart.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-4.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>PERSONALIZATION</h4>
                                        <small class="text-dark">Pudding oat cake carrot cake lemon drops gummies marshmallow.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-5.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>EMAIL MARKETING</h4>
                                        <small class="text-dark">Gummi bears pudding icing sweet caramels chocolate.Muffin croissant</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category">
                                        <img src="<?php echo $images ?>pages/graphic-6.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>DEMAND GENERATION</h4>
                                        <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer. Muffin croissant.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->

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
    <script src="layout/js/scripts/pages/faq-kb.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>