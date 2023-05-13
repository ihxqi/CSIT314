<?php
include_once("../Entity/UserAccountEntity.php");

class addUserProfileCtl
{
    public function addUserProfile($user_profile)
    {
        $aua = new UserAccount();
        $results = $aua-> addUserProfile($user_profile);
        return $results;
    }
}