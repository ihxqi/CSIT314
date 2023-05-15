<?php
include_once("../Entity/UserAccountEntity.php");

class suspendUserProfileCtl
{

    public function suspendUserProfile($user_id)
    {
        $suc = new UserAccount();
        $results = $suc->suspendUserProfile($user_id);
        return $results;
    }
}