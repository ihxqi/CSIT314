<?php
include_once("../Entity/UserAccountEntity.php");
ini_set('memory_limit', '1024M');


class updateAllUserProfilesCtl
{

    public function updateUserProfile($userProfileID, $user_profile)
    {
        $suc = new UserAccount();
        $results = $suc->updateUserProfile($userProfileID, $user_profile);
        return $results;
    }
}
