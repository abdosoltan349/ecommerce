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
    <title>Drag &amp; Drop - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/extensions/dragula.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/extensions/drag-and-drop.css">
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
                            <h2 class="content-header-title float-left mb-0">Drag &amp; Drop</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Drag &amp; Drop
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
                <!-- Draggable cards section start -->
                <section id="draggable-cards">
                    <div class="row" id="card-drag-area">
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Draggable Card 1
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Draggable Card 2
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Draggable Card 3
                                    </h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Draggable Card 4
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
                                            powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Draggable cards section end -->

                <!-- Sortable lists section start -->
                <section id="sortable-lists">
                    <div class="row">
                        <!-- Basic List Group -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic List Group Sortable</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p> The most basic list group is simply an unordered list with list items, and the proper
                                            classes.</p>
                                        <ul class="list-group" id="basic-list-group">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <img src="<?php echo $images ?>portrait/small/avatar-s-12.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mary S. Navarre</h5>
                                                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <img src="<?php echo $images ?>portrait/small/avatar-s-1.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Samuel M. Ellis</h5>
                                                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <img src="<?php echo $images ?>portrait/small/avatar-s-2.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Sandra C. Toney</h5>
                                                        Sugar plum fruitcake gummies marzipan liquorice tiramisu. Pastry liquorice chupa chupsake
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <img src="<?php echo $images ?>portrait/small/avatar-s-3.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Cleveland C. Goins</h5>
                                                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <img src="<?php echo $images ?>portrait/small/avatar-s-4.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Linda M. English</h5>
                                                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Multiple Lists
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Drag and drop items of more than one list. Add same group to group prop
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">People Group 1</h4>
                                                <ul class="list-group list-group-flush" id="multiple-list-group-a">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-12.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Mary S. Navarre</h5>
                                                                Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-1.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Samuel M. Ellis</h5>
                                                                Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-2.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Sandra C. Toney</h5>
                                                                Sugar plum fruitcake gummies marzipan liquorice tiramisu.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-3.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Cleveland C. Goins</h5>
                                                                Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-4.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Linda M. English</h5>
                                                                Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">People Group 2</h4>
                                                <ul class="list-group list-group-flush" id="multiple-list-group-b">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-12.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Mary S. Navarre</h5>
                                                                Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-1.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Samuel M. Ellis</h5>
                                                                Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-2.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Sandra C. Toney</h5>
                                                                Sugar plum fruitcake gummies marzipan liquorice tiramisu
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-3.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Cleveland C. Goins</h5>
                                                                Toffee powder marzipan tiramisu. Cake cake dessert danish.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-4.jpg" class="rounded-circle mr-2" alt="img-placeholder" height="50" width="50">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Linda M. English</h5>
                                                                Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Sortable lists section end -->

                <!-- Clone List Starts -->
                <section id="clone-lists">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Clone List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Clone list items from another existing list.</p>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">Chip Source 1</h4>
                                                <div id="chips-list-1">
                                                    <div class="chip mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Youtube</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-primary mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Facebook</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-success mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Google</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-danger mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Instagram</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-info mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Discord</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-warning mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Twitter</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h4 class="my-1">Chip Source 2</h4>
                                                <div id="chips-list-2">
                                                    <div class="chip mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Github</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-primary mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Gitlab</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-success mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Slack</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-danger mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Pintrest</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-info mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Tinder</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip chip-warning mr-1">
                                                        <div class="chip-body">
                                                            <span class="chip-text">Amazon</span>
                                                        </div>
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
                <!-- // Clone List Ends -->

                <!-- With Handle Starts -->
                <section id="dd-with-handle">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Drag And Drop With Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>You have to customize drag handle yourself using class <code>.handle</code></p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="my-1">List One</h4>
                                                <ul class="list-group" id="handle-list-1">
                                                    <li class="list-group-item"><span class="handle">+</span> Cras justo odio</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Dapibus ac facilisis in</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Morbi leo risus</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Porta ac consectetur ac</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Vestibulum at eros</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4 class="my-1">List Two</h4>
                                                <ul class="list-group" id="handle-list-2">
                                                    <li class="list-group-item"><span class="handle">+</span> Cras justo odio</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Dapibus ac facilisis in</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Morbi leo risus</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Porta ac consectetur ac</li>
                                                    <li class="list-group-item"><span class="handle">+</span> Vestibulum at eros</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // With Handle Ends -->

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
    <script src="<?php echo $vendors ?>js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/extensions/drag-drop.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>