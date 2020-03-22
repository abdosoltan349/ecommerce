<?php
class Products {
  function __construct() {
    
  }

  function get_products() {
    include "init.php";
    $stmt = $conn->prepare("SELECT * FROM product ");
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
  }

   function set_product($productName,$image , $price , $description , $discount , $subcategorieid ,$tags) {
	   include "init.php";
	  
	   $stmt = $conn->prepare("INSERT INTO product
							VALUES (1,?,?,?,?,?,?,?)");
	   $stmt->execute(array(
      $image,
			 $productName,
       $description,
       $tags,
			 $price,
       $discount,     
       $subcategorieid,              
     ));
     
     
   }
   function delete_product($productId){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM product WHERE productid = ? ");
	   $stmt->execute(array($productId));
   }
}
?>