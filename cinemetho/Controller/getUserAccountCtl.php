<?php
include_once("../Entity/UserAccountEntity.php");

class getUserAccount
{
    public function getUserAccount()
    {
        $gua = new UserAccount();
        $results = $gua->getUserAccount();
        return $results;
    }
}