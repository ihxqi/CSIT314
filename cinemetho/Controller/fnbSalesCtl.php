<?php
include_once("../Entity/ReportEntity.php");

class getFnBSalesCtl
{

    public function getFnBSales($startDate, $endDate)
    {
        $vuc = new Sales();
        $results = $vuc->getFnBSales($startDate, $endDate);
        return $results;
    }
}