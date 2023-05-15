<?php
include_once("../Entity/CinemaEntity.php");

class getCinemaRoom
{
    public function getCinemaRoom($roomNo) 
    {
        $gcr = new CinemaRoom();
        $results = $gcr->getCinemaRoom($roomNo);
        return $results;
    }
}