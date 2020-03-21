<?php
 include "init.php";
 include "includes/functions/admins.php";
  $admins = new admins();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $id = $_POST["adminid"];
	  $name = $_POST["adminname"];
	  $email = $_POST["adminemail"];
	  $password = $_POST["adminpassword"];
	  $role = $_POST["adminrole"];
	
	 $admins->update_admin($id,$name,$email,$password,$role);
	  header("Location: admins.php");
      exit();
    }
	?>