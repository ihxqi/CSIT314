<?php
include_once("../Entity/MovieEntity.php");

class DisplayMovieByIdCtl
{

    public function DisplayMovieByIdCtl($movie_id)
    {
        $dmid = new Movie();
        $results = $dmid->DisplayMovieById($movie_id);
        return $results;
    }
}