<!DOCTYPE html>

<?php
 include "init.php";
 include "includes/functions/subcategory.php";
  $subcategorys = new subcategory();
 if(!isset($_GET['do'])&&!isset($_GET['id'])){
	  $_GET['do']= "notset";
 $_GET['id']= "notset";}
	  if($_GET["do"] == "delete"){
	  if ($_SERVER["REQUEST_METHOD"] == "GET") {
		  $subcategorys->delete_subcategory($_GET["id"]);
	  }}
	  if($_GET["do"] == "add"){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$subcategorys->set_subcategory($_POST["catid"],$_POST["subname"]);
  }
  }
  
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
    <title>Sub Categorie</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/data-list-view.css">
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
                            <h2 class="content-header-title float-left mb-0">Sub Categorie</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="categorie.php">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active">Sub Categorie
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
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
									<th hidden></th>
									<th hidden></th>
                                    <th>SUB CATEGORY NAME</th>
                                    <th>CATEGORY</th>
                                    <th>PRODUCTS NUMBER</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							foreach ($subcategorys->get_subcategory() as $subcategory) {
								echo '<tr>';
								echo '<td></td>';
								echo '<td hidden class="subcategory-id">'.$subcategory["subcategorieid"].'</td>';
								echo '<td hidden class="category-id">'.$subcategory["categorieid"].'</td>';
								echo '<td class="subcategory-name">'.$subcategory["subname"].'</td>';
								echo '<td class="category">'.$subcategory["catename"].'</td>';
								echo '<td class="product-number">'.count($subcategorys->productnum($subcategory["subcategorieid"])).'</td>';
								echo '<td class="subcategory-action">';
								echo '<a href="editsubcategorie.php?subid='.$subcategory["subcategorieid"]."&subname=".$subcategory["subname"]."&catname=".$subcategory["catename"].'"><span class="sub-edit"><i class="feather icon-edit"></i></span></a>';
								echo '<a href ='.$_SERVER["PHP_SELF"]."?do=delete&id=".$subcategory["subcategorieid"].'><span class="action-delete" ><i class="feather icon-trash"></i></span></a>';
								echo '</td>';
								echo '</tr>';
							}
						
							?>
                       
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">List View Data</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Name</label>
                                            <input form = "subadd" name = "subname" type="text" class="form-control" id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category"> Category </label>
                                            <select form = "subadd" name ="catid" class="form-control" id="data-category">
												<?php 
													include "includes/functions/category.php";
													$categorys = new category();
													foreach ($categorys->getCategorie() as $category) {
													echo '<option value='.$category["categorieid"].'>'.$category["catename"].'</option>';
														
													}
													?> 
                                        
                                            </select>
                                        </div>
                                        
                                     
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
									<form action = "?do=add" id="subadd" method = "post">
                                    <button type = "submit" class="btn btn-primary">Add Data</button>
									</form>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

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
    <script src="<?php echo $vendors ?>js/extensions/dropzone.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/dataTables.select.min.js"></script>
    <script src="<?php echo $vendors ?>js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/ui/sub_categorie.js"></script>
    <!-- END: Page JS-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
<!-- END: Body-->

</html>