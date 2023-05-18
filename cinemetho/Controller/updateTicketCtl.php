<?php
include_once("../Entity/TicketEntity.php");

class updateTicketCtl
{
    public function updateTicket($ticket_id, $ticket_price, $ticket_cust_profile)
    {
        $ut = new Ticket();
        $results = $ut->updateTicket($ticket_id, $ticket_price, $ticket_cust_profile);
        return $results;
    }
}

?>