<?php
 include "init.php";
 include "includes/functions/products.php";
 include "includes/functions/uplode.php";
  $products = new Products();
  $uplode = new Uplode();  
    if($_SERVER["REQUEST_METHOD"] == "GET"){
       
        $product = $products->get_product($_GET["id"]);
        
    }else{
      
       $uplode->uplodeFile($products,"update",$_POST["pid"]);

    }
  
	?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Edit admin</title>
    
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
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
 <?php
	include $tpl."header.php";
		include $tpl."menu.php";
	 ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="admins.php">Admins</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Admin
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
              
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Admin</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                            <div class="row">
                                                <input name="pid" value="<?php echo $product["productid"];?>" type="text" style="visibility: hidden;" form = "dataListUpload" >
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-name">Name</label>
                                                    <input name= "v" value="<?php echo $product["name"];?>" type="text" class="form-control" id="data-name" form = "dataListUpload">
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="sel1">Select Subcatigory:</label>
                                                    <select class="form-control" name="subcategorie" id="sel1" form = "dataListUpload">
                                                        <?php
                                                          $quary = $conn->prepare("SELECT * FROM subcategorie ");
                                                          $quary->execute();
                                                          $subcategorie = $quary->fetchAll();
                                                          foreach($subcategorie as $sub){
                                                            echo "selected";
                                                                    if($sub["subcategorieid"] == $product["subcategorieid"]){
                                                                            echo '<option value="'.$sub["subcategorieid"] .'" selected>'
                                                                            . $sub["subname"].'</option>';
                                                                    }else{
                                                                        echo '<option value="'.$sub["subcategorieid"] .'">'
                                                                        . $sub["subname"].'</option>';
                                                                    }
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
                                                    <label for="data-type">Order Status</label>
                                                    <select name = "type" class="form-control" id="data-type" form = "dataListUpload">
                                                        <option value="normal" <?php if($product["type"] == "1900"){echo "selected";}; ?>>Normal</option>
                                                        <option value="1900"<?php if($product["type"] == "1900"){echo "selected";}; ?> >Banner : 1900 X 700</option>
                                                        <option value="banner1" <?php if($product["type"] == "banner1"){echo "selected";}; ?>>Banner 1 : 600 X 370</option>
                                                        <option value="banner2"<?php if($product["type"] == "banner2"){echo "selected";}; ?>>Banner 2 : 600 X 370</option>
                                                        <option value="banner3" <?php if($product["type"] == "banner3"){echo "selected";}; ?>>Banner 3 : 600 X 370</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-price">Price</label>
                                                    <input name = "x" value="<?php echo $product["price"];?>" type="text" class="form-control" id="data-price" form = "dataListUpload">
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-tags">Tags</label>
                                                    <input name = "tags" value="<?php echo $product["tags"];?>" type="text" class="form-control" id="data-tags" form = "dataListUpload">
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-discount">Discount</label>
                                                    <input name = "discount" value="<?php echo $product["discount"];?>" type="number" class="form-control" id="data-discount" form = "dataListUpload">
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-description">Description</label>
                                                    <textarea name= "description" rows="3" class="form-control" id="data-description" form = "dataListUpload"><?php echo $product["description"];?></textarea>
                                                </div>
                                                           
                                            <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="dropzone dropzone-area" id="dataListUpload" enctype="multipart/form-data">
                                                <input   name = "y" type="file" class="dz-message">Upload Image</input>
                                            </form>                          
                                                <div class="col-sm-12 data-field-col data-list-upload">
                                                <input  type = "submit"  value = "Save Updates" class="btn btn-primary" form = "dataListUpload" style="margin-top: 20px;"></input>
                                            </div>
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

            </div>
        </div>
    </div>
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
	<?php
		include $tpl."footer.php";
	 ?>

    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo $vendors ?>js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo $vendors ?>js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
	<script src="layout/js/scripts/ui/admins.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>