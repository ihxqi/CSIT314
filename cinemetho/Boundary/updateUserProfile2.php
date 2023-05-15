<?php
include_once("../Controller/updateUserProfileCtl2.php");

if (isset($_GET['userProfile_ID'])) {
    $user_id = $_GET['userProfile_ID'];
    $upName = $_GET['upName'];

    // Set user status to "Suspended"
    $updateUserProfileCtl2 = new updateUserProfileCtl2();
    $updateUserProfileCtl2->updateUserProfile($user_id, $upName);

    // Redirect to user admin page
    header("Location: ../Boundary/userAdmin.php");
    exit();
}
?>