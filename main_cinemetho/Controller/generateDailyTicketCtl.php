<?php
include_once("../Entity/ReportEntity.php");

class generateDailyTicketCtl
{

    public function getTicketSalesDaily($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getTicketSalesDaily($startDate, $endDate);
        return $results;
    }
}
?>