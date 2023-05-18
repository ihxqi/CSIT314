<?php
include_once("../Entity/RoomEntity.php");

class suspendRoomCtl
{

    public function suspendRoom($roomNo)
    {
        $src = new Room();
        $src->suspendRoom($roomNo);
    }
}
