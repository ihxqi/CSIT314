<?php
include_once("../Entity/FnBEntity.php");

class addFnBCtl
{
    public function addFnB($comboId, $comboName, $comboDesc, $comboPrice, $comboQuantity)
    {
        $afnb = new FnB();
        $results = $afnb-> addFnB($comboId, $comboName, $comboDesc, $comboPrice, $comboQuantity);
        return $results;
    }
}