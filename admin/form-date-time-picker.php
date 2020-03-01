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
    <title>Date &amp; Time Picker - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/pickers/pickadate/pickadate.css">
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
                            <h2 class="content-header-title float-left mb-0">Date &amp; Time Picker</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Form Elements</a>
                                    </li>
                                    <li class="breadcrumb-item active">Date &amp; Time Picker
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
                <!-- Pick-A-Date Picker start -->
                <section id="pick-a-date">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Date Picker</h4>
                                    <p class="mb-2">The basic setup requires targetting an <code>input</code> element and invoking the picker.</p>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Default</h5>
                                    <p>Use <code>.pickadate</code> class for basic Pick-A-Date Picker.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Format Date Picker</h5>
                                    <p>Set<code>format</code> attribute for basic change format of date.</p>
                                    <form>
                                        <input type='text' class="form-control format-picker" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Min-Max Date Range</h5>
                                    <p>Use <code>.pickadate-limits</code> class for min. and max. date range.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-limits" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Translation</h5>
                                    <p>Use <code>.pickadate-translations</code> class for language translation.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-translations" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Pick-a-date with short string</h5>
                                    <p>Use <code>.pickadate-short-string</code> class for short Month & Week String.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-short-string" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Change First Weekday</h5>
                                    <p>Use <code>.pickadate-firstday</code> class to change first weekday to Monday.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-firstday" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Select Month & Year</h5>
                                    <p>Use <code>.pickadate-months-year</code> class for display select menus to pick the month & year.</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-months-year" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Disabled Dates & Weeks</h5>
                                    <p>Use <code>.pickadate-disable</code> class for disabled dates or weeks. (such as all Sun.1th day of week and 1st and 3rd Sat.).</p>
                                    <form>
                                        <input type='text' class="form-control pickadate-disable" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pick-A-Date Picker end -->


                <!-- Pick-A-Time Picker start -->
                <section id="pick-a-time">
                    <div class="card">
                        <div class="card-body">
                            <div class="row match-height">
                                <div class="col-12">
                                    <h4 class="mb-1">Time Picker</h4>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Default</h5>
                                    <p>Use <code>.pickatime</code> class for basic Pick-a-Time Picker.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Change Formats</h5>
                                    <p>Use <code>.pickatime-format</code> class to change time display formats.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime-format" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Format with Label</h5>
                                    <p>Use <code>.pickatime-formatlabel</code> class to display time label format.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime-formatlabel" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Intervals</h5>
                                    <p>Use <code>.pickatime-intervals</code> class to display time in Intervals.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime-intervals" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Disable set of Time</h5>
                                    <p>Use <code>.pickatime-disable</code> class to disable time hours.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime-disable" />
                                    </form>
                                </div>
                                <div class="col-md-6 col-12 mb-1">
                                    <h5 class="text-bold-500">Minimum and maximum time range</h5>
                                    <p>Use <code>.pickatime-min-max</code> class for Start Time & End Time.</p>
                                    <form>
                                        <input type='text' class="form-control pickatime-min-max" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pick-A-Time Picker end -->

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
    <script src="<?php echo $vendors ?>js/pickers/pickadate/picker.js"></script>
    <script src="<?php echo $vendors ?>js/pickers/pickadate/picker.date.js"></script>
    <script src="<?php echo $vendors ?>js/pickers/pickadate/picker.time.js"></script>
    <script src="<?php echo $vendors ?>js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>