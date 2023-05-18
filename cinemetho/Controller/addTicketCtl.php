<?php
include_once("../Entity/TicketEntity.php");

class addTicketCtl
{
    public function addTicket($ticket_price, $ticket_cust_profile)
    {
        $at = new Ticket();
        $results = $at-> addTicket($ticket_price, $ticket_cust_profile);
        return $results;
    }
}
?>