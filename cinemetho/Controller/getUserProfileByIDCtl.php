<?php
include_once("../Entity/UserAccountEntity.php");

class getProfileByIDCtl
{

    public function getUserAccountByID($user_id)
    {
        $suc = new getProfileByIDCtl();
        $results = $suc->getUserAccountByID($user_id);
        return $results;
    }
}
