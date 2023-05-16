<?php
include_once("../Entity/ReportEntity.php");

class generateWeeklyFnBCtl
{

    public function getFnBSalesWeekly($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getFnBSalesWeekly($startDate, $endDate);
        return $results;
    }
}
?>