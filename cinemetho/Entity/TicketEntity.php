<?php
include_once("../config.php");
class Ticket {
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    }

    public function __destruct() {
        mysqli_close($this->conn);
    }

    function addTicket($TicketPrice, $Ticket_cust_profile) {
        global $connection;
        $query = "INSERT INTO ticket(TicketPrice, Ticket_cust_profile) VALUES ('$TicketPrice', '$Ticket_cust_profile')";
        $result = mysqli_query($connection, $query);
        if($result) {
          return true;
        } else {
          return false;
        }
      }
      
      // Read Ticket function getCinemaRoom()
      function getTicket()
      { {
          $conn = mysqli_connect(HOST, USER, PASS, DB);
          $query = "SELECT * FROM ticket ORDER BY ticket_id ASC";
          $result = mysqli_query($conn, $query);
          $tickets = array(); // Changed variable name from $fnbCombo to $fnbCombos
          if ($result) {
            while ($res = mysqli_fetch_array($result)) {
              $ticket = array(); // Changed variable name from $fnbCombo to $fnbCombo
              $ticket['ticket_id'] = $res['ticket_id'];
              $ticket['ticket_price'] = $res['ticket_price'];
              $ticket['ticket_cust_profile'] = $res['ticket_cust_profile'];
              $ticket['ticket_status'] = $res['ticket_status'];
              $tickets[] = $ticket; // Changed from $fnbCombo[] to $fnbCombos[]
            }
          }
          return $tickets;
        }
      }
      
      // Update Ticket
      function updateTicket($TicketID, $TicketPrice, $Ticket_cust_profile) {
        global $connection;
        $query = "UPDATE ticket SET TicketPrice='$TicketPrice', Ticket_cust_profile='$Ticket_cust_profile' WHERE TicketID='$TicketID'";
        $result = mysqli_query($connection, $query);
        if($result) {
          return true;
        } else {
          return false;
        }
      }

      //Please do suspend and activate yourself       //Please do suspend and activate yourself       //Please do suspend and activate yourself




}