<?php
include_once("../Entity/UserProfileEntity.php");

class suspendUserProfileCtl
{
 
    public function suspendUserProfile($user_profileID)
    {
        $suc = new UserProfile();
        $results = $suc->suspendUserProfile($user_profileID);
        return $results;
    }
}