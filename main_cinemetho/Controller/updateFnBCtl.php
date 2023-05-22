<?php
include_once("../Entity/FnBEntity.php");

class updateFnBCtl
{
    public function updateFnB($comboID, $comboName, $comboImg, $comboPrice, $comboQuantity)
    {
        $ufnb = new FnB();
        $results = $ufnb->updateFnB($comboID, $comboName, $comboImg, $comboPrice, $comboQuantity);
        return $results;
    }
}

?>