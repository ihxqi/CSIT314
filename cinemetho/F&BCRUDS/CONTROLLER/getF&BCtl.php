<?php
include_once("../Entity/FnBEntity.php");

class getFnB
{
    public function getFnB($comboId) 
    {
        $gfnb = new FnB();
        $results = $gfnb->getFnB($comboId);
        return $results;
    }
}