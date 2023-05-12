<?php
include_once("../Entity/UserAccountEntity.php");

class getUserProfiles
{

    public function getUserProfiles()
    {
        $vuc = new UserAccount();
        $results = $vuc->getUserProfiles();
        return $results;
    }
}