<?php
include_once("../Entity/ReportEntity.php");

class generateDailyFnBCtl
{

    public function getFnBSalesDaily($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getFnBSalesDaily($startDate, $endDate);
        return $results;
    }
}
?>