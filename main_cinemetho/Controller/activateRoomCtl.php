<?php
include_once("../Entity/RoomEntity.php");

class activateRoomCtl
{

    public function activateRoom($roomNo)
    {
        $arc = new Room();
        $arc->activateRoom($roomNo);
    }
}
