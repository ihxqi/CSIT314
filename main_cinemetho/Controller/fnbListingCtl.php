<?php
include_once("../Entity/FnbEntity.php");

class DisplayFnbCtl
{

    public function DisplayFnbCtl()
    {
        $rc = new FnB('localhost', 'root', '', 'cinemetho');
        $results = $rc-> DisplayFnb();
        return $results;
    }
}