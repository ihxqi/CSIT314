<?php
include_once("../Controller/suspendF&BCtl.php");

if (isset($_GET['combo_id'])) {
    $comboId = $_GET['combo_id'];

    $FnBCtl = new suspendFnBCtl(); 
    $FnBCtl->suspendFnB($comboId);

    header("Location: ../Boundary/manageF&B.php");
    exit();
}
?>