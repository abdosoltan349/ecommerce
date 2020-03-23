<?php


class tax {
    
       function setTax($Tname,$Tpercentage){
               include "init.php";
	  
        $stmt = $conn->prepare("INSERT INTO tax (name,percentage)
							VALUES (:name,:percentage)");
	   $stmt->execute(array(
	
            'name' => $Tname,
            'percentage' => $Tpercentage,
            
	   ));
       
       
       
       }
    
   
       function getTax(){
               include "init.php";

        
       $stmt = $conn->prepare("SELECT * FROM tax WHERE 1");
       $stmt->execute();
       $admins = $stmt->fetchAll();
       return $admins;
        
    }
    
    
       function updateTax($taxid,$Tname,$Tpercentage){
       include "init.php";
	
       $stmt = $conn->prepare("UPDATE tax SET name=?,percentage=? WHERE taxid=?");
	   $stmt->execute(array($Tname,$Tpercentage,$taxid));
         
         
    }
    
       function deleteTax($taxid){
       include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM tax WHERE taxid = ?");
	   $stmt->execute(array($taxid));
    }
    
    

}



  ?>
