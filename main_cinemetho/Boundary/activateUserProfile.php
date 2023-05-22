<?php
include_once("../Controller/activateUserProfileCtl.php");

if (isset($_GET['userProfile_ID'])) {
    $user_id = $_GET['userProfile_ID'];

    // Set user status to "Active"
    $activateUserProfileCtl = new activateUserProfileCtl();
    $activateUserProfileCtl->activateUserProfile($user_id);

    // Redirect to user admin page
    header("Location: ../Boundary/userProfile.php");
    exit();
}
?>