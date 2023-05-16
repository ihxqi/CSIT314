<?php
include_once("../Entity/UserProfileEntity.php");

class suspendUserProfileCtl
{

    public function suspendUserProfile($user_profile)
    {
        $suc = new UserProfile();
        $results = $suc->suspendUserProfile($user_profile);
        return $results;
    }
}