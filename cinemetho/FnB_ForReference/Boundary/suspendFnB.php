<?php
include_once("../Controller/suspendFnBCtl.php");

if (isset($_GET['ComboID'])) {
    $ComboID = $_GET['ComboID'];

    $FnBCtl = new suspendFnBCtl(); 
    $FnBCtl->suspendFnB($ComboID);

    header("Location: ../Boundary/manageFnB.php");
    exit();
}
?>