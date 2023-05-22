<?php
include_once("../Entity/CinemaRoomEntity.php");

class suspendCinemaRoomCtl
{

    public function suspendCinemaRoom($roomNo)
    {
        $scr = new CinemaRoom();
        $scr->suspendCinemaRoom($roomNo);
    }
}

?>