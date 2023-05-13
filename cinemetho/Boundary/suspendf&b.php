<!-- need to edit -->
<?php
include_once("../Controller/suspendUserAccountCtl.php");

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Set user status to "Suspended"
    $userAccountCtl = new suspendUserAccountCtl();
    $userAccountCtl->suspendUserAccount($user_id);

    // Redirect to user admin page
    header("Location: ../Boundary/manageUser.php");
    exit();
}
?>