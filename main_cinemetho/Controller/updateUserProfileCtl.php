<?php
include_once("../Entity/UserProfileEntity.php");


class updateUserProfileCtl
{

    public function updateUserProfile($user_profileID, $upName)
    {
        $suc = new UserProfile();
        $results = $suc->updateUserProfile($user_profileID, $upName);
        return $results;
    }
}
?>
