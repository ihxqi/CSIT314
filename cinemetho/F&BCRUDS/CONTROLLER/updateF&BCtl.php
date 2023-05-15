<?php
include_once("../Entity/FnBEntity.php");

class updateFnBCtl
{

    public function updateFnB($comboId, $comboName, $comboDesc, $comboPrice, $comboQuantity)
    {
        $ufnb = new FnB();
        $results = $ufnb->updateUserAccount($comboId, $comboName, $comboDesc, $comboPrice, $comboQuantity);
        return $results;
    }
}
