<?php
class coupons{
    
function set_coupon($cName,$ccode,$cValue) {
    include "init.php";
	   $stmt = $conn->prepare("INSERT INTO coupon (name,code,value)
							VALUES (:name,:code,:value)");
	   $stmt->execute(array(
	
            'name' => $cName,
            'code' => $ccode,
			'value' => $cValue
            
	   ));
    
  }

function get_coupon() {
    include "init.php";
	
    $stmt = $conn->prepare("SELECT couponid,name,code,value FROM coupon ");
    $stmt->execute();
    $coupon = $stmt->fetchAll();
    return $coupon;
  }

function update_coupon($name,$code,$value,$couponid) {
    include "init.php";
 $stmt = $conn->prepare("UPDATE coupon SET couponid=?,name=?,code=?,value=? WHERE couponid=?");
	   $stmt->execute(array($name,$code,$value,$couponid));
  }

function delete_coupon($couponid) {
   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM coupon WHERE couponid = ? ");
	   $stmt->execute(array($couponid));
  }
}
?>