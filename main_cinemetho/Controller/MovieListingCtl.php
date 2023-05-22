<?php
include_once("../Entity/MovieEntity.php");

class DisplayMovieCtl
{

    public function DisplayMovieCtl()
    {
        $rc = new Movie('localhost', 'root', '', 'cinemetho');
        $results = $rc->DisplayMovie();
        return $results;
    }
}