<?php
include_once("../Controller/activateFnBCtl.php");

if (isset($_GET['ComboID'])) {
    $ComboID = $_GET['ComboID'];

    // Set user status to "Active"
    $FnBCtl = new activateFnBCtl();
    $FnBCtl->activateFnB($ComboID);

    // Redirect to user admin page
    header("Location: ../Boundary/manageFnB.php");
    exit();
}
?>