<?php
include_once("../Entity/ReportEntity.php");

class getTicketSalesCtl
{

    public function getTicketSales($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getTicketSales($startDate, $endDate);
        return $results;
    }
}