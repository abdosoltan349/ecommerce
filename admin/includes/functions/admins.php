<?php
class admins {
  function __construct() {
    
  }

  function get_admins() {
    include "init.php";
	
    $stmt = $conn->prepare("SELECT adminid,name,email,role FROM admins WHERE 1");
    $stmt->execute();
    $admins = $stmt->fetchAll();
    return $admins;
  }
  function Role($role) {
	  $color = "";
	  if ($role == "Admin"){
		  $color = "chip-success";
	  }
	  elseif ($role == "Supervisor"){
		  $color = "chip-primary";
	  }
	  elseif ($role == "Accountant"){
		  $color = "chip-warning";
	  }
	 
	  return $color;
  }
}
?>