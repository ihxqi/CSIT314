<?php
include_once("../Entity/UserAccountEntity.php");

class activateUserProfileCtl
{

    public function activateUserProfile($user_id)
    {
        $suc = new UserAccount();
        $suc->activateUserProfile($user_id);
    }
}
