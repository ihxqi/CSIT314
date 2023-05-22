<?php
include_once("../Entity/TicketEntity.php");

class suspendTicketCtl
{

    public function suspendTicket($ticket_id)
    {
        $suc = new Ticket();
        $results = $suc->suspendTicket($ticket_id);
        return $results;
    }
}


?>
