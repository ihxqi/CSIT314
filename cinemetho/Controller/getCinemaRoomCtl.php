<?php
include_once("../Entity/CinemaEntity.php");

class getCinemaRoomCtl
{
    public function getCinemaRoom()
    {
        $gcr = new CinemaRoom();
        $results = $gcr->getCinemaRoom();
        return $results;
    }
}