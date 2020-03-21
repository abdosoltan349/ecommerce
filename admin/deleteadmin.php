<?php 
include "init.php";
include "includes/functions/admins.php";

$admins = new admins();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["admindelete"];
    $admins->delete_admins($id);
    header("Location: admins.php");
    exit();
}
?>
