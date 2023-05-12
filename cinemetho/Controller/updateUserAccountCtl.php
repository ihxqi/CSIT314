<?php
include_once("../Entity/UserAccountEntity.php");

class updateUserAccountCtl
{

    public function updateUserAccount($user_id, $username, $email, $password, $user_profile)
    {
        $suc = new UserAccount();
        $results = $suc->updateUserAccount($user_id, $username, $email, $password, $user_profile);
        return $results;
    }
}
