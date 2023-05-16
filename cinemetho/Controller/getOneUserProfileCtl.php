<?php
include_once("../Entity/UserProfileEntity.php");

class getOneUserProfileCtl
{
    public function getOneUserProfile($userProfile_ID)
    {
        $gou = new UserProfile();
        $results = $gou->getOneUserProfile($userProfile_ID);
        return $results;
    }
}
?>