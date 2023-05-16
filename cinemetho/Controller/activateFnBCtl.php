<?php
include_once("../Entity/FnbEntity.php");

class activateFnBCtl
{

    public function activateFnB($ComboID)
    {
        $suc = new Fnb();
        $suc->activateFnB($ComboID);
    }
}
