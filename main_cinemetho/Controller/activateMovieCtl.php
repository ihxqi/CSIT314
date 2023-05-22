<?php
include_once("../Entity/MovieEntity.php");

class activateMovieCtl
{

    public function activateMovie($movie_id)
    {
        $amc = new Movie();
        $amc->activateMovie($movie_id);
    }
}
