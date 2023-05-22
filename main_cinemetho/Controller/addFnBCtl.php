<?php
include_once("../Entity/FnBEntity.php");

class addFnBCtl
{
    public function addFnB($comboName, $comboImg, $comboPrice, $comboQuantity)
    {
        $afnb = new FnB();
        $results = $afnb-> addFnB($comboName, $comboImg, $comboPrice, $comboQuantity);
        return $results;
    }
}
?>