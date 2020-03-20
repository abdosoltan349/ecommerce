
<?php
	

function isadmin($email,$pass){
    include "init.php";
    $pass = sha1($pass);
    $stmt = $conn->prepare("SELECT adminid,name,role FROM admins WHERE email = ? AND pass = ?");
    $stmt->execute(array($email,$pass));
    $admins = $stmt->fetchAll();
    return $admins;
}

?>
