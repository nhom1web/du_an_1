<?php 
 session_start();
    ob_start();
 include ("../admin/layout/header.php");
 include("../../controllers/admincontroller/admincontroller.php");
 include ("../admin/layout/footer.php");
?>