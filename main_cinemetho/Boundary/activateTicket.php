<?php
include_once("../Controller/activateTicketCtl.php");

if (isset($_GET['ticket_id'])) {
    $ticket_id = $_GET['ticket_id'];

    $ticketCtl = new activateTicketCtl();
    $ticketCtl->activateTicket($ticket_id);

    header("Location: ../Boundary/manageTicket.php");
    exit();
}
?>