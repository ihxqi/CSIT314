<?php
include_once("../Entity/MovieEntity.php");

class DisplayMovierCtl
{

    public function DisplayMovierCtl()
    {
        $rc = new Movie('localhost', 'root', '', 'cinemetho');
        $results = $rc->DisplayMovie();
        return $results;
    }
}