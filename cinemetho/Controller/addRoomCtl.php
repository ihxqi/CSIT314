<?php
include_once("../Entity/RoomEntity.php");

class addRoomCtl
{
    public function addRoom($roomCapacity, $movieShowtime, $movieShowDate, $movie_id)
    {
        $accr = new Room();
        $results = $accr-> addRoom($roomCapacity, $movieShowtime, $movieShowDate, $movie_id);
        return $results;
    }
}
?>