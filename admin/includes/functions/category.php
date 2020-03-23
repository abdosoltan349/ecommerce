<?php

class category{

    
    function setCategorie($categoriename){
    include "init.php";
           $stmt = $conn->prepare("INSERT INTO categorie(catename)
							VALUES (:catename)");
	   $stmt->execute(array(
		'catename' =>  $categoriename        
     ));
    }
    
    function getCategorie(){
    include "init.php";
    $stmt = $conn->prepare("SELECT * from categorie  WHERE 1");
    $stmt->execute();
    $category = $stmt->fetchAll();
    return $category;
        
        
    }
    
    function updateCategorie($catename,$categorieid){
    include "init.php";
        
      $stmt = $conn->prepare("UPDATE categorie SET catename=? WHERE categorieid=?");
	   $stmt->execute(array($catename,$categorieid));
        
    }
    
    function deleteCategorie($categorieid){
    include "init.php";
        $stmt =  $conn->prepare("DELETE FROM categorie WHERE categorieid = ? ");
	   $stmt->execute(array($categorieid));
        
        
    }
	function subcatnum($catid){
    include "init.php";
    $stmt = $conn->prepare("SELECT * FROM subcategorie WHERE categorieid = ?");
    $stmt->execute(array($catid));
    $subcat = $stmt->fetchAll();
    return $subcat;
	}
}



?>