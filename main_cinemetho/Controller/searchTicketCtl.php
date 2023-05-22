<?php
include_once("../Entity/TicketEntity.php");

class searchTicketCtl
{

    public function searchTicket($search)
    {
        $s = new Ticket();
        $results = $s->searchTicket($search);
        return $results;
    }
}