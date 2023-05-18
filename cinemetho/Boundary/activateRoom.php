<?php
include_once("../Controller/activateRoomCtl.php");

if (isset($_GET['roomNo'])) {
    $roomNo = $_GET['roomNo'];

    // Set user status to "Active"
    $activateRoomCtl = new activateRoomCtl();
    $activateRoomCtl->activateRoom($roomNo);

    // Redirect to user admin page
    header("Location: ../Boundary/manageRoom.php");
    exit();
}
?>