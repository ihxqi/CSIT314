<?php
include_once("../Entity/ReportEntity.php");

class generateMonthlyTicketCtl
{

    public function getTicketSalesMonthly($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getTicketSalesMonthly($startDate, $endDate);
        return $results;
    }
}
?>