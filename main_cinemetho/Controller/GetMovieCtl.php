<?php
include_once("../Entity/MovieEntity.php");

class GetMovieCtl 
{
    public function getMovie() 
    {
        $gm = new Movie();
        $results = $gm->getMovie();
        return $results;
    }
}

?>