<?php
include_once("../Entity/TicketPriceEntity.php");

class fetchTicketPricesCtl
{
    public function getTickets()
    {
        $ftp = new TicketPrice();
        $results = $ftp->getTickets();
        return $results;
    }
}