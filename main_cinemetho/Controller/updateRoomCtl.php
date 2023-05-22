<?php
include_once("../Entity/RoomEntity.php");

class updateRoomCtl
{
    public function updateRoom($roomNo, $roomCapacity,$movieShowtime, $movieShowDate, $movie_id)
    {
        $ucr = new Room();
        $results = $ucr->updateRoom($roomNo, $roomCapacity,$movieShowtime, $movieShowDate, $movie_id);
        return $results;
    }
}
?>

