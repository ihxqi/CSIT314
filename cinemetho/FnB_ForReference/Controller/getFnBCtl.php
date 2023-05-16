<?php
include_once("../Entity/FnBEntity.php");

class getFnBCtl
{
    public function getFnB() 
    {
        $gfnb = new Fnb();
        $results = $gfnb->getFnB();
        return $results;
    }
}

?>