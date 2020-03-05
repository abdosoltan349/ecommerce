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
    <title>Tooltip - Vuexy - Bootstrap HTML admin template</title>
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
                            <h2 class="content-header-title float-left mb-0">Tooltip</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tooltip
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
                <!--Tooltip Positions Starts-->
                <section id="tooltip-positions">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Positions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Four options are available: top, right, bottom, and left aligned.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Top Tooltip</h5>
                                                <p class="text-center my-1">Add <code>data-placement="top"</code> to add top tooltip.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                        Tooltip on top
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Right Tooltip</h5>
                                                <p class="text-center my-1">Add <code>data-placement="right"</code> to add right tooltip.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                                                        Tooltip on right
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Bottom Tooltip</h5>
                                                <p class="text-center my-1">Add <code>data-placement="bottom"</code> to add bottom tooltip.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                        Tooltip on bottom
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Basic Left Tooltip</h5>
                                                <p class="text-center my-1">Add <code>data-placement="left"</code> to add left tooltip.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                                                        Tooltip on left
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
                <!-- Tooltip Positions Ends -->

                <!-- Tooltip Triggers Starts-->
                <section id="tooltip-triggers">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Triggers</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
                                            separate them with a space. "manual" cannot be combined with any other trigger.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Click</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="click"</code> for click trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Click Triggered" data-trigger="click">
                                                        On Click Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Focus</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Focus Triggered" data-trigger="focus">
                                                        On Focus Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hover</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="hover"</code> for hover trigger. This is a default
                                                    trigger.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Hover Triggered">
                                                        On Hover Trigger
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Manual</h5>
                                                <p class="text-center my-1">Use <code>data-trigger="manual"</code> for manual trigger. You
                                                    show/hide using js</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary manual" data-toggle="tooltip" data-original-title="Manual Triggered" data-trigger="manual">
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
                <!-- Tooltip Triggers Ends -->

                <!-- Tooltip Options -->
                <section id="tooltip-options">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Options</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Disabled Animaition</h5>
                                                <p class="text-center my-1">Use <code>data-animation="false"</code> to remove fade animation. Default is
                                                    true.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Without Fade Animation" data-animation="false">
                                                        No animation
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Delay Show/Hide</h5>
                                                <p class="text-center my-1">Delay showing and hiding the tooltip (<code>ms</code>) - does not apply to
                                                    manual trigger type.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary delay" data-toggle="tooltip" data-original-title="Click Triggered" data-delay="500">
                                                        Delay Tooltip
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
                <!-- Tooltip Options Ends -->

                <!-- Tooltip Methods Starts-->
                <section id="tooltip-methods">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Methods</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never
                                            displayed.</p>
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Show</h5>
                                                <p class="text-center my-1">Reveals an element’s tooltip. Returns to the caller before the tooltip has
                                                    actually been shown.(i.e. before the <code>shown.bs.tooltip</code> event occurs)</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="show-method" data-popup="tooltip" data-original-title="Show Method Tooltip" data-trigger="manual">
                                                        Show Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hide</h5>
                                                <p class="text-center my-1">Hides an element’s tooltip. Returns to the caller before the tooltip has
                                                    actually been hidden (i.e. before the <code>hidden.bs.tooltip</code> event occurs).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hide-method" data-popup="tooltip" data-original-title="Hide Method Tooltip" data-trigger="manual">
                                                        Hide Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Toggle</h5>
                                                <p class="text-center my-1">Toggles an element’s tooltip. Returns to the caller before the tooltip has
                                                    actually been shown or hidden (i.e. before the <code>shown.bs.tooltip</code> or
                                                    <code>hidden.bs.tooltip</code> event occurs).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="toggle-method" data-popup="tooltip" data-original-title="Toggle Method Tooltip" data-trigger="manual">
                                                        Toggle Method <i class="feather icon-play-circle ml-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Dispose</h5>
                                                <p class="text-center my-1">Hides and destroys an element’s tooltip. Tooltips that use delegation cannot
                                                    be individually destroyed on descendant trigger elements.</p>
                                                <div class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Dispose Method Tooltip" data-trigger="click" id="dispose-method">
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
                <!-- Tooltip Methods Ends -->

                <!--       Tooltip Events	  -->
                <section id="tooltip-events">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltip Events</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Show Event</h5>
                                                <p class="text-center my-1">This event fires immediately when the <code>show</code> instance method is
                                                    called.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="show-tooltip">
                                                        Show Event Tooltip
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Shown Event</h5>
                                                <p class="text-center my-1">This event is fired when the tooltip has been made visible to the user (will
                                                    wait for CSS transitions to complete).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="shown-tooltip">
                                                        Shown Event Tooltip
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hide Event</h5>
                                                <p class="text-center my-1">This event is fired immediately when the <code>hide</code> instance method
                                                    has been called.</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hide-tooltip">
                                                        Hide Event Tooltip
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-1 text-center">
                                                <h5 class="text-center">Hidden Event</h5>
                                                <p class="text-center my-1">This event is fired when the tooltip has finished being hidden from the user
                                                    (will wait for CSS transitions to complete).</p>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary" id="hidden-tooltip">
                                                        Hidden Event Tooltip
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
                <!-- Section Ends -->

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
    <script src="layout/js/scripts/tooltip/tooltip.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>