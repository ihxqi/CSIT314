<?php
include_once("../Entity/UserProfileEntity.php");


class updateUserProfileCtl
{

    public function updateUserProfile($user_profile, $upName)
    {
        $suc = new UserProfile();
        $results = $suc->updateUserProfile($user_profile, $upName);
        return $results;
    }
}
?>
