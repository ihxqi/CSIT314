<?php
include_once("../Entity/MovieEntity.php");

class DisplayMovieByIdCtl
{

    public function DisplayMovieByIdCtl($MovieID)
    {
        $dmid = new Movie();
        $results = $dmid->DisplayMovieById($MovieID);
        return $results;
    }
}