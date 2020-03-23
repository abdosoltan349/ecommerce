<?php
class subcategory {
  function __construct() {
    
  }

  function get_subcategory() {
    include "init.php";
	
    $stmt = $conn->prepare("SELECT subcategorie.subcategorieid,subcategorie.subname,subcategorie.categorieid,categorie.catename FROM subcategorie , categorie WHERE  subcategorie.categorieid = categorie.categorieid");
    $stmt->execute();
    $subcategory = $stmt->fetchAll();
    return $subcategory;
  }
  
   function set_subcategory($categorieid,$subname) {
	   include "init.php";
	   $stmt = $conn->prepare("INSERT INTO subcategorie (categorieid,subname)
							VALUES (:categorieid,:subname)");
	   $stmt->execute(array(
			'categorieid' => $categorieid,
			'subname' => $subname
	   ));
   }
   function delete_subcategory($subcategorieid){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM subcategorie WHERE subcategorieid = ? ");
	   $stmt->execute(array($subcategorieid));
   }
   function update_subcategory($subcategorieid,$categorieid,$subname) {
	   include "init.php";
	   $stmt = $conn->prepare("UPDATE subcategorie SET categorieid=?,subname=? WHERE subcategorieid=?");
	   $stmt->execute(array($categorieid,$subname,$subcategorieid));
   }
   function productnum($subcatid){
    include "init.php";
    $stmt = $conn->prepare("SELECT * FROM product WHERE subcategorieid = ?");
    $stmt->execute(array($subcatid));
    $subcat = $stmt->fetchAll();
    return $subcat;
	}
}
?>