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
   function set_admins($adminname,$adminemail,$adminpassword,$adminrole) {
	   include "init.php";
	   $adminpassword = sha1($adminpassword);
	   $stmt = $conn->prepare("INSERT INTO admins (name, email, pass,role)
							VALUES (:name,:email,:password,:role)");
	   $stmt->execute(array(
			'name' => $adminname,
			'email' => $adminemail,
			'password' => $adminpassword,
			'role' => $adminrole
	   ));
   }
   function delete_admins($adminid){	 
	   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM admins WHERE adminid = ? ");
	   $stmt->execute(array($adminid));
   }
   function update_admin($adminid,$adminname,$adminemail,$adminpassword,$adminrole) {
	   include "init.php";
	   $adminpassword = sha1($adminpassword);
	   $stmt = $conn->prepare("UPDATE admins SET name=?,email=?,pass=?,role=? WHERE adminid=?");
	   $stmt->execute(array($adminname,$adminemail,$adminpassword,$adminrole,$adminid));
   }
}
?>