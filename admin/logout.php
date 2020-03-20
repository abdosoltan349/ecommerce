<?php
session_start();
unset($_SESSION["adminid"]);
unset($_SESSION["adminname"]);
unset($_SESSION["adminrole"]);
header("Location:auth-login");
?>