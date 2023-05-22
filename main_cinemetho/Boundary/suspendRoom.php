<?php
include_once("../Controller/suspendRoomCtl.php");

if (isset($_GET['roomNo'])) {
    $roomNo = $_GET['roomNo'];

    $suspendRoomCtl = new suspendRoomCtl(); 
    $suspendRoomCtl->suspendRoom($roomNo);

    header("Location: ../Boundary/manageRoom.php");
    exit();
}
?>