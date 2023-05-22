<?php
include_once("../Entity/RoomEntity.php");

class searchRoomCtl
{

    public function searchRoom($search)
    {
        $s = new Room();
        $results = $s->searchRoom($search);
        return $results;
    }
}

?>