<?php
class Products {
  function __construct() {
    
  }

  function get_products() {
    include "init.php";
    $stmt = $conn->prepare("SELECT * FROM product WHERE 1 ");
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
  }

   function set_product($productName,$image , $price , $description , $discount , $subcategorieid ,$tags) {
	   include "init.php";
	  
	   $stmt = $conn->prepare("INSERT INTO product
							VALUES (:image,:name,:desc,:tags,:price,:discount,:subcategorieid)");
	   $stmt->execute(array(
		'image' => $image,
		'name' =>  $productName,
        'desc' =>  $description,
        'tags' =>  $tags,
		'price' =>  $price,
        'discount' =>  $discount,     
        'subcategorieid' =>  $subcategorieid            
     ));
     
     
   }
   function delete_product($productId){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM product WHERE productid = ? ");
	   $stmt->execute(array($productId));
   }
}
?>