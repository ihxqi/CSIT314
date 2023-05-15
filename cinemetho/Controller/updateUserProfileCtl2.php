<?php
include_once("../Entity/UserAccountEntity.php");

class updateUserProfileCtl2
{

    public function updateUserProfile($user_profile, $upName)
    {
        $suc = new UserAccount();
        $results = $suc->updateUserProfile($user_profile, $upName);
        return $results;
    }
}