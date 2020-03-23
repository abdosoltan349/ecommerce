<?php
class Products {
  function __construct() {
    
  }

  function get_products() {
    include "init.php";
    $stmt = $conn->prepare("SELECT * FROM product,subcategorie WHERE product.subcategorieid = subcategorie.subcategorieid");
    $stmt->execute();
    $products = $stmt->fetchAll();
    return $products;
  }

   function set_product($productName,$image , $price , $description , $discount , $subcategorieid ,$tags,$type) {
	   include "init.php";
	  
     $stmt = $conn->prepare("INSERT INTO product(image,name,description,tags,price,discount,subcategorieid,type)
     VALUES (:image,:name,:desc,:tags,:price,:discount,:subcategorieid,:type)");
	   $stmt->execute(array(
		    'image' => $image,
		    'name' =>  $productName,
        'desc' =>  $description,
        'tags' =>  $tags,
		    'price' =>  $price,
        'discount' =>  $discount,     
        'subcategorieid' =>  $subcategorieid,
        "type" => $type            
     ));
     
     
   }
   function delete_product($productId){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM product WHERE productid = ? ");
	   $stmt->execute(array($productId));
   }

   function get_product($id){
    include "init.php";
   
    $stmt = $conn->prepare("SELECT * FROM product,subcategorie WHERE product.subcategorieid = subcategorie.subcategorieid and productid = ?");
    $stmt->execute(array($id));
    $product = $stmt->fetch();
    return $product;
   }

   function update_product($productid,$productName,$image , $price , $description , $discount , $subcategorieid ,$tags,$type){
    include "init.php";
    $stmt = $conn->prepare("UPDATE product SET name=?,image=?,price=?,description=?,discount=?
    ,subcategorieid=?,tags=?,type=? WHERE productid=?");
    $stmt->execute(array($productName,$image,$price,$description,$discount,$subcategorieid,$tags,$type,$productid));
   }

   function update_type($type){
    include "init.php";
    $stmt = $conn->prepare("UPDATE product SET type = 'normal' WHERE type=?");
    $stmt->execute(array($type));
   }
}
?>