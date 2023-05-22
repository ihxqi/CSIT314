<?php
include_once("../Entity/UserProfileEntity.php");

class getUserProfiles
{

    public function getUserProfiles()
    {
        $vuc = new UserProfile();
        $results = $vuc->getUserProfiles();
        return $results;
    }
}