<?php
include_once("../config.php");
class Sales
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    function getFnBSales($startDate, $endDate)
    {
        
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT DATE(bookingDate) AS bookingDate, CONCAT('$', FORMAT(SUM(cb.comboQuantity * f.ComboPrice), 1)) AS totalSale 
        FROM booking b 
        LEFT JOIN combobooked cb ON cb.booking_id = b.booking_id 
        LEFT JOIN fnb f ON f.ComboID = cb.combo_id 
        WHERE DATE(bookingDate) BETWEEN '$startDate' AND '$endDate' 
        GROUP BY DATE(bookingDate)
        ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    function getTicketSales($startDate, $endDate)
    {
        
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT DATE(bookingDate) AS bookingDate, CONCAT('$', FORMAT(SUM(tb.ticketQuantity * t.ticket_price), 1)) AS totalSale 
        FROM booking b 
        LEFT JOIN ticketbooked tb ON tb.booking_id = b.booking_id 
        LEFT JOIN ticket t ON t.ticket_id = tb.ticket_id 
        WHERE DATE(bookingDate) BETWEEN '$startDate' AND '$endDate'
        GROUP BY DATE(bookingDate)
        ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    
}
