<?php
include_once("../Controller/suspendUserAccountCtl.php"); // need to change to controller

if (isset($_GET['Ticket_cust_profile'])) {
    $Ticket_cust_profile = $_GET['Ticket_cust_profile'];

    // Set user status to "Suspended"
    $ticketClt = new suspendTicketClt();
    $ticketClt->suspendTicketClt($Ticket_cust_profile);

    // Redirect to user admin page
    header("Location: ../Boundary/manageTicket.php");
    exit();
}
?>