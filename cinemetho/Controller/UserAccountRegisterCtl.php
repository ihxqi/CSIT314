<?php
include_once("../Entity/UserAccountEntity.php");

class UserAccountRegisterCtl
{

    public function RegisterCustomerAccount($username, $password, $email)
    {
        $rc = new UserAccount();
        $results = $rc->RegisterCustomerAccount($username, $password, $email);
        return $results;
    }
}