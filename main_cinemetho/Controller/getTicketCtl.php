<?php
include_once("../Entity/TicketEntity.php");

class getTicketCtl
{
    public function getTicket() 
    {
        $gfnb = new Ticket();
        $results = $gfnb->getTicket();
        return $results;
    }
}

?>