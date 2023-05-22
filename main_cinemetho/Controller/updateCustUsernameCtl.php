<?php
include_once("../Entity/UserAccountEntity.php");


class updateCustUsernameCtl
{

    public function updateCustUsername($user_id, $username)
    {
        $suc = new UserAccount();
        $results = $suc->updateCustUsername($user_id, $username);
        return $results;
    }
}
?>
