<?php
include_once("../Entity/UserAccountEntity.php");

class UserAccountLoginCtl
{

    public function LoginCustomerAccount($userName, $password)
    {
        $c = new UserAccount();
        $results = $c->loginCustomerAccount($userName, $password);
        return $results;
    }
}