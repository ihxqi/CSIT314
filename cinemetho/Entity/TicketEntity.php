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
      
      // Read Ticket
      function displayTicket() {
        global $connection;
        $query = "SELECT * FROM ticket";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) > 0) {
          echo '<table border="1">
                  <tr>
                      <th>TicketID</th>
                      <th>TicketPrice</th>
                      <th>Ticket_cust_profile</th>
                  </tr>';
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['TicketID']."</td>
                    <td>".$row['TicketPrice']."</td>
                    <td>".$row['Ticket_cust_profile']."</td>
                    
                  </tr>";
          }
          echo "</table>";
        } else {
          echo "No tickets found.";
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