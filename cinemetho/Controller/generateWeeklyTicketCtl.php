<?php
include_once("../Entity/ReportEntity.php");

class generateWeeklyTicketCtl
{

    public function getTicketSalesWeekly($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getTicketSalesWeekly($startDate, $endDate);
        return $results;
    }
}
?>