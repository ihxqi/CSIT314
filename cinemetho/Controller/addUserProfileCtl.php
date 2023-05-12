<?php
include_once("../Entity/UserAccountEntity.php");

class addUserProfileCtl
{
    public function addUserProfile($username, $email, $password, $user_profile)
    {
        $aua = new UserAccount();
        $results = $aua-> addUserProfile($username, $email, $password, $user_profile);
        return $results;
    }
}