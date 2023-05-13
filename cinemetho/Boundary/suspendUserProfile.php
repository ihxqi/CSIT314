<?php
include_once("../Controller/suspendUserProfileCtl.php");

if (isset($_GET['userProfile_ID'])) {
    $user_id = $_GET['userProfile_ID'];

    // Set user status to "Suspended"
    $suspendUserProfileCtl = new suspendUserProfileCtl();
    $suspendUserProfileCtl->suspendUserProfile($user_id);

    // Redirect to user admin page
    header("Location: ../Boundary/userAdmin.php");
    exit();
}
?>