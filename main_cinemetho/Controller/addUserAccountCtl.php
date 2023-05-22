<?php
include_once("../Entity/UserAccountEntity.php");

class addUserAccountCtl
{
    public function addUserAccount($username, $email, $password, $user_profile)
    {
        $aua = new UserAccount();
        $results = $aua-> addUserAccount($username, $email, $password, $user_profile);
        return $results;
    }
}