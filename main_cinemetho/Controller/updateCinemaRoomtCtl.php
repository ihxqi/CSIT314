<?php
include_once("../Entity/CinemaRoomEntity.php");

class updateCinemaRoomCtl
{

    public function updateCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId)
    {
        $ucr = new CinemaRoom();
        $results = $ucr->updateUserAccount($roomNo, $capacity, $showtime, $movieDate, $movieId);
        return $results;
    }
}
