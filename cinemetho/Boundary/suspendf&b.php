<!-- need to edit -->
<?php
include_once("../Controller/suspendUserAccountCtl.php"); //need to change

if (isset($_GET['combo_id'])) {
    $combo_id = $_GET['combo_id'];

    // Set user status to "Suspended"
    $userAccountCtl = new suspendUserAccountCtl(); //need to change with controller
    $userAccountCtl->suspendf&b($combo_id);

    // Redirect to user admin page
    header("Location: ../Boundary/manageUser.php");
    exit();
}
?>