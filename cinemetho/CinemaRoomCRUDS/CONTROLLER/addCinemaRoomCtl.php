<?php
include_once("../Entity/CinemaEntity.php");

class addCinemaRoomCtl
{
    public function addCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId)
    {
        $acr = new CinemaRoom();
        $results = $acr-> addCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId);
        return $results;
    }
}