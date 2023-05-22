<?php
include_once("../Entity/ReportEntity.php");

class generateMonthlyFnBCtl
{

    public function getFnBSalesMonthly($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getFnBSalesMonthly($startDate, $endDate);
        return $results;
    }
}
?>