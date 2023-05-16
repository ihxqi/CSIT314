<?php
include_once("../Controller/suspendCinemaRoomCtl.php");

if (isset($_GET['room_no'])) {
    $roomNo = $_GET['room_no'];

    $cinemaRoomCtl = new suspendCinemaRoomCtl(); 
    $cinemaRoomCtl->suspendCinemaRoom($roomNo);

    header("Location: ../Boundary/manageRoom.php");
    exit();
}
?>