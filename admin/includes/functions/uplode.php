

<?php
class Uplode{
    
    function __construct() {
    
    }



    function uplodeFile( $products, $productType ,  $productSentId = null ){
       
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
        if($_POST["type"]!== "normal" ){
            $products->update_type($_POST["type"]);
        }
        // Check if file already exists
        if (file_exists($target_file)) {   
            if($productType !== "update"){ 
            $products->set_product($_POST["v"] ,$target_file, 
                $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"],$_POST["type"]);
            }else{
               
                $products->update_product($productSentId,$_POST["v"] ,$target_file, 
                $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"],$_POST["type"]);
            }
            $uploadOk = 0;
        }
       
        // Check file size
        if ($_FILES["y"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
     
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 1) {                 
            if (move_uploaded_file($_FILES["y"]["tmp_name"], $target_file)) {
               if($productType !== "update"){ 
                $products->set_product($_POST["v"] ,$target_file, 
                $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"],$_POST["type"]);
               }else{
               
                $products->update_product($productSentId,$_POST["v"] ,$target_file, 
                $_POST["x"],$_POST["description"]  ,  $_POST["discount"] , $_POST["subcategorie"], $_POST["tags"],$_POST["type"]);
               }
            } 
        }

       
    }
}
?>