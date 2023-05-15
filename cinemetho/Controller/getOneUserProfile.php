<?php
include_once("../Entity/UserAccountEntity.php");

class getOneUserProfile
{

    public function getOneUserProfile($userProfile_ID)
    {
        $vuc = new UserAccount();
        $results = $vuc->getOneUserProfile($userProfile_ID);
        return $results;
    }
}