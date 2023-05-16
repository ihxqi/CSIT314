<?php
include_once("../Entity/FnBEntity.php");

class suspendFnBCtl
{

    public function suspendFnB($comboId)
    {
        $sfnb = new FnB();
        $sfnb->suspendFnB($comboId);
    }
}
