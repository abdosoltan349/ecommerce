<!DOCTYPE html>

<?php
    include "init.php";
    include "includes/functions/products.php";

    $products = new Products();
  
   // $products->set_product("any name" , "image path" , "15", " pro dis" , "50%" , "2","anytaag");
    
   
    
    
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
    <title>Thumb View - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/tables/datatable/datatables.min.css">
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

    <?php 

       
       





    ?>

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
                            <h2 class="content-header-title float-left mb-0">Thumb View</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Data List</a>
                                    </li>
                                    <li class="breadcrumb-item active">Thumb View
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
                <section id="data-thumb-view" class="data-thumb-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                                <tr>
                                    <th></th>
									<th hidden></th>
                                    <th>Image</th>
                                    <th>NAME</th>
                                    <th>CATEGORY</th>
                                    <th>PRICE</th>
                             
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php   
                                foreach($products->get_products() as $product){
                                 echo '<tr>';
								echo '<td></td>';
								echo '<td hidden class="product-id">'.$product["productid"].'</td>';
								echo '<td class="product-img"><img src ="'.$product["image"].'"></td>';
								echo '<td class="product-name">'.$product["name"].'</td>';
								echo '<td class="product-category">'.$product["subname"].'</td>';
								echo '<td class="product-number">'.$product["price"].'</td>';
								echo '<td class="subcategory-action">';
								echo '<span class="action-edit"><i class="feather icon-edit"></i></span>';
								echo '<span class="action-delete" ><i class="feather icon-trash"></i></span>';
								echo '</td>';
								echo '</tr>';
									                                            
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Thumb View Data</h4>
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
                                            <input name= "v" type="text" class="form-control" id="data-name" form = "dataListUpload">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="sel1">Select Subcatigory:</label>
                                            <select class="form-control" name="subcategorie" id="sel1" form = "dataListUpload">
                                                <?php
                                                  $quary = $conn->prepare("SELECT * FROM subcategorie ");
                                                  $quary->execute();
                                                  $subcategorie = $quary->fetchAll();
                                                  foreach($subcategorie as $sub){
                                                   echo '<option value="'.$sub["subcategorieid"] .'">'
                                                   . $sub["subname"].'</option>';
                                                  }                                              
                                                ?>                                                                                      
                                            </select>
                                        </div>  
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Order Status</label>
                                            <select name = "z" class="form-control" id="data-status" form = "dataListUpload">
                                                <option>Pending</option>
                                                <option>Canceled</option>
                                                <option>Delivered</option>
                                                <option>On Hold</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Price</label>
                                            <input name = "x" type="text" class="form-control" id="data-price" form = "dataListUpload">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-tags">Tags</label>
                                            <input name = "tags" type="text" class="form-control" id="data-tags" form = "dataListUpload">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-discount">Discount</label>
                                            <input name = "discount" type="number" class="form-control" id="data-discount" form = "dataListUpload">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-description">Description</label>
                                            <textarea name= "description" rows="3" class="form-control" id="data-description" form = "dataListUpload"></textarea>
                                        </div>
                                                                             
                                        <div class="col-sm-12 data-field-col data-list-upload">
										
                                            <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="dropzone dropzone-area" id="dataListUpload" enctype="multipart/form-data">
                                                <input   name = "y" type="file" class="dz-message">Upload Image</input>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <input type = "submit"  value = "Add Data" class="btn btn-primary" form = "dataListUpload"></input>
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
    <script src="layout/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $target_dir = "../data/uploads/";
        $target_file = $target_dir . basename($_FILES["y"]["name"]);
        $uploadOk = 1;


        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["y"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $products->set_product($_POST["v"] ,$target_file, 
            $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"]);
            
            //header("Location: producat-panel.php");
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["y"]["size"] > 500000) {   
            $uploadOk = 0;
          
        }
        
      
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["y"]["tmp_name"], $target_file)) {
                
                $products->set_product($_POST["v"] ,$target_file, 
                $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"]);
              //  header("Location: producat-panel.php");
            }
        } 
    }
?>