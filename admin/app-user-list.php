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
    <title>User List - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/tables/ag-grid/ag-theme-material.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/aggrid.css">
    <!-- END: Page CSS-->

  

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
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filters</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                    <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="users-list-filter">
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-role">Role</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-role">
                                                        <option value="">All</option>
                                                        <option value="user">User</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-status">Status</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-status">
                                                        <option value="">All</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Blocked">Blocked</option>
                                                        <option value="deactivated">Deactivated</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-verified">Verified</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-verified">
                                                        <option value="">All</option>
                                                        <option value="true">Yes</option>
                                                        <option value="false">No</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-lg-3">
                                                <label for="users-list-department">Department</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control" id="users-list-department">
                                                        <option value="">All</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Devlopment">Devlopment</option>
                                                        <option value="Management">Management</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users filter end -->
                    <!-- Ag Grid users list section start -->
                    <div id="basic-examples">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                                                <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                                                    <button class="btn btn-white filter-btn dropdown-toggle border text-dark" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        1 - 20 of 50
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                        <a class="dropdown-item" href="#">20</a>
                                                        <a class="dropdown-item" href="#">50</a>
                                                    </div>
                                                </div>
                                                <div class="ag-btns d-flex flex-wrap">
                                                    <input type="text" class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0" id="filter-text-box" placeholder="Search...." />
                                                    <div class="action-btns">
                                                        <div class="btn-dropdown ">
                                                            <div class="btn-group dropdown actions-dropodown">
                                                                <button type="button" class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Actions
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-trash-2"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-clipboard"></i> Archive</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-printer"></i> Print</a>
                                                                    <a class="dropdown-item" href="#"><i class="feather icon-download"></i> CSV</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myGrid" class="aggrid ag-theme-material">
								
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ag Grid users list section end -->
                </section>
                <!-- users list ends -->

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
    <script src="<?php echo $vendors ?>js/tables/ag-grid/ag-grid-community.min.noStyle.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>