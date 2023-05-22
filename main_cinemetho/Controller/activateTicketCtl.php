<?php
include_once("../Entity/TicketEntity.php");

class activateTicketCtl
{

    public function activateTicket($ticketId)
    {
        $act = new Ticket();
        $act->activateTicket($ticketId);
    }
}

?>