<?php
include_once("../Entity/UserAccountEntity.php");

class getBookingInfoCtl
{

    public function getBookingInfo($user_id)
    {
        $vuc = new UserAccount();
        $results = $vuc->getBookingInfo($user_id);
        return $results;
    }
}
?>