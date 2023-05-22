<?php
include_once("../Entity/UserAccountEntity.php");

class updateLastLoginCtl
{

    public function updateLastLoginDate($username)
    {
        $rc = new UserAccount();
        $results = $rc->updateLastLoginDate($username);
        return $results;
    }
}

?>