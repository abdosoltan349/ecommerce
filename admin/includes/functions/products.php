<?php
class Products {
  function __construct() {
    
  }

  function get_products() {
    include "init.php";
<<<<<<< HEAD
    $stmt = $conn->prepare("SELECT * FROM product ");
=======
    $stmt = $conn->prepare("SELECT * FROM product,subcategorie WHERE product.subcategorieid = subcategorie.subcategorieid");
>>>>>>> cc1ac0eb8ed0830c32f351e082057580276c1207
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
  }

   function set_product($productName,$image , $price , $description , $discount , $subcategorieid ,$tags) {
	   include "init.php";
	  
	   $stmt = $conn->prepare("INSERT INTO product
<<<<<<< HEAD
							VALUES (1,?,?,?,?,?,?,?)");
	   $stmt->execute(array(
      $image,
			 $productName,
       $description,
       $tags,
			 $price,
       $discount,     
       $subcategorieid,              
=======
							VALUES (:image,:name,:desc,:tags,:price,:discount,:subcategorieid)");
	   $stmt->execute(array(
		'image' => $image,
		'name' =>  $productName,
        'desc' =>  $description,
        'tags' =>  $tags,
		'price' =>  $price,
        'discount' =>  $discount,     
        'subcategorieid' =>  $subcategorieid            
>>>>>>> cc1ac0eb8ed0830c32f351e082057580276c1207
     ));
     
     
   }
   function delete_product($productId){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM product WHERE productid = ? ");
	   $stmt->execute(array($productId));
   }
}
?>