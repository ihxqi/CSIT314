<?php
include_once("../Entity/UserAccountEntity.php");

class UserAccountRegisterCtl
{

    public function RegisterCustomerAccount($username, $password, $email, $cust_profile)
    {
        $rc = new UserAccount();
        $results = $rc->RegisterCustomerAccount($username, $password, $email, $cust_profile);
        return $results;
    }
}