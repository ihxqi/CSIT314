<?php
include_once("../Entity/UserAccountEntity.php");

class getUserAccountByIDCtl
{

    public function getUserAccountByID($user_id)
    {
        $suc = new UserAccount();
        $results = $suc->getUserAccountByID($user_id);
        return $results;
    }
}
