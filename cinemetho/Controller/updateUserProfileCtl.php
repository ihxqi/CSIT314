<?php
include_once("../Entity/UserProfileEntity.php");
ini_set('memory_limit', '1024M');


class updateUserProfileCtl
{
    public function updateUserProfile($userProfileID, $user_profile)
    {
        $suc = new UserProfile();
        $results = $suc->updateUserProfile($userProfileID, $user_profile);
        return $results;
    }
}
