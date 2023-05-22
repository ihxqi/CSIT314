<?php
include_once("../Entity/MovieEntity.php");

class searchMovieCtl
{

    public function searchMovie($search)
    {
        $s = new Movie();
        $results = $s->searchMovie($search);
        return $results;
    }
}

?>