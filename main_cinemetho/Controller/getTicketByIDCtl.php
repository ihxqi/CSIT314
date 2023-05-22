<?php
include_once("../Entity/TicketEntity.php");

class getTicketByIDCtl
{
    public function getTicketByID($ticket_id) 
    {
        $gfnb = new Ticket();
        $results = $gfnb->getTicketByID($ticket_id);
        return $results;
    }
}

?>