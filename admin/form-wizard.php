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
    <title>Form Wizard - Vuexy - Bootstrap HTML admin template</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/forms/wizard.css">
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
                            <h2 class="content-header-title float-left mb-0">Form Wizard</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
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
                <!-- Form wizard with number tabs section start -->
                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form wizard with number tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Create neat and clean form wizard using <code>.wizard-circle</code> class.</p>
                                        <form action="#" class="number-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6>Step 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">First Name </label>
                                                            <input type="text" class="form-control" id="firstName1">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Last Name</label>
                                                            <input type="text" class="form-control" id="lastName1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress1">Email</label>
                                                            <input type="email" class="form-control" id="emailAddress1">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location1">City</label>
                                                            <select class="custom-select form-control" id="location1" name="location">
                                                                <option value="new-york">New York</option>
                                                                <option value="chicago">Chicago</option>
                                                                <option value="san-francisco">San Francisco</option>
                                                                <option value="boston">Boston</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6>Step 2</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle1">Proposal Title</label>
                                                            <input type="text" class="form-control" id="proposalTitle1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jobtitle">Job Title</label>
                                                            <input type="text" class="form-control" id="jobtitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription1">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription1" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6>Step 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventName1">Event Name :</label>
                                                            <input type="text" class="form-control" id="eventName1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventType1">Event Status :</label>
                                                            <select class="custom-select form-control" id="eventType1" data-placeholder="Type to search cities" name="eventType1">
                                                                <option value="Banquet">Planning</option>
                                                                <option value="Fund Raiser">In Process</option>
                                                                <option value="Dinner Party">Finished</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventLocation1">Event Location :</label>
                                                            <select class="custom-select form-control" id="eventLocation1" name="location">
                                                                <option value="new-york">New York</option>
                                                                <option value="chicago">Chicago</option>
                                                                <option value="san-francisco">San Francisco</option>
                                                                <option value="boston">Boston</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center pt-md-2">
                                                            <label class="mr-2">Requirements :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="d-inline-block mr-2">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Staffing</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Catering</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->

                <!-- Form wizard with icon tabs section start -->
                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form wizard with icon tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.icons-tab-steps</code> class to get desired icons in tab.</p>
                                        <form action="#" class="icons-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName11">First Name </label>
                                                            <input type="text" class="form-control" id="firstName11">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName11">Last Name</label>
                                                            <input type="text" class="form-control" id="lastName11">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress11">Email</label>
                                                            <input type="email" class="form-control" id="emailAddress11">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location11">City</label>
                                                            <select class="custom-select form-control" id="location11" name="location">
                                                                <option value="new-york">New York</option>
                                                                <option value="chicago">Chicago</option>
                                                                <option value="san-francisco">San Francisco</option>
                                                                <option value="boston">Boston</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle11">Proposal Title</label>
                                                            <input type="text" class="form-control" id="proposalTitle11">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jobtitle11">Job Title</label>
                                                            <input type="text" class="form-control" id="jobtitle11">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription11">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription11" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather icon-image"></i> Step 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventName11">Event Name :</label>
                                                            <input type="text" class="form-control" id="eventName11">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventType11">Event Status :</label>
                                                            <select class="custom-select form-control" id="eventType11" data-placeholder="Type to search cities" name="eventType11">
                                                                <option value="Banquet">Planning</option>
                                                                <option value="Fund Raiser">In Process</option>
                                                                <option value="Dinner Party">Finished</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventLocation11">Event Location :</label>
                                                            <select class="custom-select form-control" id="eventLocation11" name="location">
                                                                <option value="new-york">New York</option>
                                                                <option value="chicago">Chicago</option>
                                                                <option value="san-francisco">San Francisco</option>
                                                                <option value="boston">Boston</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center pt-md-2">
                                                            <label class="mr-2">Requirements :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="d-inline-block mr-2">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Staffing</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Catering</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with icon tabs section end -->

                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Validation Example</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="#" class="steps-validation wizard-circle">
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                First Name
                                                            </label>
                                                            <input type="text" class="form-control required" id="firstName3" name="firstName">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                                Last Name
                                                            </label>
                                                            <input type="text" class="form-control required" id="lastName3" name="lastName">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Email
                                                            </label>
                                                            <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                City
                                                            </label>
                                                            <select class="custom-select form-control" id="location" name="location">
                                                                <option value="">New York</option>
                                                                <option value="Amsterdam">Chicago</option>
                                                                <option value="Berlin">San Francisco</option>
                                                                <option value="Frankfurt">Boston</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Proposal Title
                                                            </label>
                                                            <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jobTitle5">
                                                                Job Title
                                                            </label>
                                                            <input type="text" class="form-control required" id="jobTitle5" name="jobTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription3">Short Description</label>
                                                            <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather icon-image"></i> Step 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                Event Name
                                                            </label>
                                                            <input type="text" class="form-control required" id="eventName3" name="eventName">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventStatus3">
                                                                Event Status
                                                            </label>
                                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                                <option value="Planning">Planning</option>
                                                                <option value="In Progress">In Progress</option>
                                                                <option value="Finished">Finished</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventLocation3">
                                                                Event Location
                                                            </label>
                                                            <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                                                <option value="Planning">New York</option>
                                                                <option value="In Progress">Chicago</option>
                                                                <option value="Finished">San Francisco</option>
                                                                <option value="Finished">Boston</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group d-flex align-items-center pt-md-2">
                                                            <label class="mr-2">Requirements :</label>
                                                            <div class="c-inputs-stacked">
                                                                <div class="d-inline-block mr-2">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Staffing</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-inline-block">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" value="false">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Catering</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->

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
    <script src="<?php echo $vendors ?>js/extensions/jquery.steps.min.js"></script>
    <script src="<?php echo $vendors ?>js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>