<?php
include_once("../Entity/MovieEntity.php");

class suspendMovieCtl
{

    public function suspendMovie($movie_id)
    {
        $smc = new Movie();
        $smc->suspendMovie($movie_id);
    }
}
