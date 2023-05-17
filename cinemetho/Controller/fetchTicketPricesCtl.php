<?php
include_once("../Entity/TicketEntity.php");

class fetchTicketPricesCtl
{
    public function getTickets()
    {
        $ftp = new TicketPrice();
        $results = $ftp->getTickets();
        return $results;
    }
}