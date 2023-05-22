<?php
include_once("../Entity/UserProfileEntity.php");

class activateUserProfileCtl
{

    public function activateUserProfile($user_id)
    {
        $suc = new UserProfile();
        $suc->activateUserProfile($user_id);
    }
}
