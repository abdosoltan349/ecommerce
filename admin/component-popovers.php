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
    <title>Popovers - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Popovers</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Popovers
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
                <!-- Popover Positions start -->
                <section id="popover-positions">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Positions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Four options are available: top, right, bottom, and left aligned.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Basic Top Popover</h5>
                                                <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                                                    <code>data-placement="top"</code> to add top popover.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="top" data-container="body" data-original-title="Popover on top" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on top
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Basic Right Popover</h5>
                                                <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                                                    <code>data-placement="right"</code> to add right popover.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="right" data-container="body" data-original-title="Popover on right" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on right
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Basic Bottom Popover</h5>
                                                <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                                                    <code>data-placement="bottom"</code> to add bottom popover.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="bottom" data-container="body" data-original-title="Popover on bottom" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on bottom
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Basic Left Popover</h5>
                                                <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                                                    <code>data-placement="left"</code> to add left popover.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="left" data-container="body" data-original-title="Popover on left" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                        Popover on left
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Positions end -->

                <!-- Popover Triggers start -->
                <section id="popover-triggers">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Triggers</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
                                            separate them with a space. "manual" cannot be combined with any other trigger.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Hover</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="hover"</code> for hover trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-trigger="hover" data-original-title="Hover Triggered">
                                                        On Hover Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Click</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="click"</code> for click trigger. This is a default
                                                    trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-original-title="Click Triggered" data-trigger="click" data-placement="bottom">
                                                        On Click Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Focus</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-original-title="Focus Triggered" data-trigger="focus">
                                                        On Focus Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Manual</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="manual"</code> for manual trigger. You can do
                                                    show/hide using js</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary manual" data-toggle="popover" data-placement="left" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-original-title="Manual Triggered" data-trigger="manual">
                                                        On Manual Trigger
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Triggers end -->

                <!-- Popover Options start -->
                <section id="popover-options">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Options</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Disabled Animaition</h5>
                                                <p class="text-center my-1">Use <code>data-animation="false"</code> to remove fade animation. Default is
                                                    true.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-original-title="Without Fade Animation" data-animation="false" data-placement="top">
                                                        No animation
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Delay Show/Hide</h5>
                                                <p class="text-center my-1">Delay showing and hiding the popover (<code>ms</code>) - does not apply to
                                                    manual trigger type.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary delay" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies." data-original-title="Click Triggered" data-delay="500" data-placement="left">
                                                        Delay Popover
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Options end -->

                <!-- Popover Methods start -->
                <section id="popover-methods">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Methods</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>This is considered a “manual” triggering of the popover.Popovers whose both title and content are
                                            zero-length are never displayed.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Show</h5>
                                                <p class="text-center my-1">Reveals an element’s popover. Returns to the caller before the popover has
                                                    actually been shown.(i.e. before the <code>shown.bs.popover</code> event occurs)</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="show-method" data-popup="popover" data-placement="top" data-original-title="Show Method Popover" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake." data-trigger="manual">
                                                        Show Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Hide</h5>
                                                <p class="text-center my-1">Hides an element’s popover. Returns to the caller before the popover has
                                                    actually been hidden (i.e. before the <code>hidden.bs.popover</code> event occurs).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hide-method" data-popup="popover" data-placement="left" data-original-title="Hide Method Popover" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake." data-trigger="manual">
                                                        Hide Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Toggle</h5>
                                                <p class="text-center my-1">Toggles an element’s popover. Returns to the caller before the popover has
                                                    actually been shown or hidden (i.e. before the <code>shown.bs.popover</code> or
                                                    <code>hidden.bs.popover</code> event occurs).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="toggle-method" data-popup="popover" data-original-title="Toggle Method Popover" data-placement="top" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake." data-trigger="manual">
                                                        Toggle Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Dispose</h5>
                                                <p class="text-center my-1">Hides and destroys an element’s popover. Popovers that use delegation cannot
                                                    be individually destroyed on descendant trigger elements.</p>
                                                <div class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary" data-toggle="popover" data-original-title="Dispose Method Popover" data-placement="left" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake." data-trigger="click" id="dispose-method">
                                                            Dispose
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="dispose">
                                                            <i class="feather icon-play-circle"></i>
                                                        </button>
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
                <!-- Popover Methods end -->

                <!-- Popover Events start -->
                <section id="popover-events">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Popover Events</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Show Event</h5>
                                                <p class="text-center my-1">This event fires immediately when the <code>show</code> instance method is
                                                    called.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="show-popover">
                                                        Show Event Popover
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Shown Event</h5>
                                                <p class="text-center my-1">This event is fired when the popover has been made visible to the user (will
                                                    wait for CSS transitions to complete).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="shown-popover">
                                                        Shown Event Popover
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Hide Event</h5>
                                                <p class="text-center my-1">This event is fired immediately when the <code>hide</code> instance method
                                                    has been called.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hide-popover">
                                                        Hide Event Popover
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                                <h5 class="text-center my-1">Hidden Event</h5>
                                                <p class="text-center my-1">This event is fired when the popover has finished being hidden from the user
                                                    (will wait for CSS transitions to complete).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hidden-popover">
                                                        Hidden Event Popover
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Events end -->

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
    <script src="layout/js/scripts/popover/popover.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>