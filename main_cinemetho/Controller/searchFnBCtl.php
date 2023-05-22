<?php
include_once("../Entity/FnBEntity.php");

class searchFnBCtl
{

    public function searchFnB($search)
    {
        $s = new FnB();
        $results = $s->searchFnB($search);
        return $results;
    }
}

?>