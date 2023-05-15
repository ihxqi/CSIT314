<?php
include_once("../Controller/activateUserProfileCtl.php"); //need to change

if (isset($_GET['Ticket_cust_profile'])) {
    $Ticket_cust_profile = $_GET['Ticket_cust_profile'];

    // Set user status to "Active"
    $activateTicketClt = new activateTicketClt();
    $activateTicketClt->activateTicket($Ticket_cust_profile);

    // Redirect to user admin page
    header("Location: ../Boundary/manageTicket.php");
    exit();
}
?>