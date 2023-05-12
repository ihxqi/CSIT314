<?php
include_once("../Entity/UserAccountEntity.php");

class suspendUserProfile
{

    public function suspendUserProfile($user_profile)
    {
        $suc = new UserAccount();
        $results = $suc->suspendUserProfile($user_profile);
        return $results;
    }
}