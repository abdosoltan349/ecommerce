<?php
class coupons{
    
function set_coupon($ccouponid,$cName,$ccode,$cValue) {
    include "init.php";
	   $stmt = $conn->prepare("INSERT INTO admins (couponid,name,code, value)
							VALUES (:couponid,:name,:code,:value)");
	   $stmt->execute(array(
	        'couponid' => $couponid,		
            'name' => $name,
            'code' => $code,
			'value' => $value
            
	   ));
    
  }

function get_coupon() {
    include "init.php";
	
    $stmt = $conn->prepare("SELECT couponid,name,code,value FROM coupon ");
    $stmt->execute();
    $coupon = $stmt->fetchAll();
    return $coupon;
  }

function update_coupon($couponid,$name,$code,$value) {
    include "init.php";
   	$stmt = $conn->prepare("UPDATE coupon (couponid,name,code, value)
							SET (:couponid,:name,:code,:value)");
    $stmt->execute();
    $UpdateCoupon = $stmt->fetchAll();
    return $UpdateCoupon;
  }

function delete_coupon($couponid) {
   include "init.php";
	   $stmt =  $conn->prepare("DELETE FROM coupon WHERE couponid = ? ");
	   $stmt->execute(array($couponid));
  }
}
?>