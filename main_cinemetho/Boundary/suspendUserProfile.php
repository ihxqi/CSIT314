<?php
include_once("../Controller/suspendUserProfileCtl.php");

if (isset($_GET['userProfile_ID'])) {
    $user_profileID = $_GET['userProfile_ID'];

    // Set user status to "Suspended"
    $suspendUserProfileCtl = new suspendUserProfileCtl();
    $suspendUserProfileCtl->suspendUserProfile($user_profileID);

    // Redirect to user admin page
    header("Location: ../Boundary/userProfile.php");
    exit();
}
?>