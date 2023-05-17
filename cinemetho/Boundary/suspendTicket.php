<?php
include_once("../Controller/suspendTicketCtl.php");

if (isset($_GET['ticket_id'])) {
    $ticket_id = $_GET['ticket_id'];

    $ticketCtl = new suspendTicketCtl(); 
    $ticketCtl->suspendTicket($ticket_id);

    header("Location: ../Boundary/manageTicket.php");
    exit();
}
?>