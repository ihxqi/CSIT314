<?php
include_once("../config.php");
class TicketPrice {
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    }

    public function getAllTicketPrices() {
        $sql = "SELECT * FROM ticket_prices";
        $result = $this->conn->query($sql);
        $prices = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prices[$row["customer_profile"]] = $row["price"];
            }
        } else {
            echo "0 results";
        }
        return $prices;
    }
    function getTickets()
    { 
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM ticket";
        $result = mysqli_query($conn, $query);
        $tickets = array(); // Changed variable name from $fnbCombo to $fnbCombos
        while ($row = mysqli_fetch_assoc($result)) {
            $tickets[] = $row;
        }
        mysqli_close($conn);
        return $tickets;
    }
    // Destructor
    public function __destruct() {
        mysqli_close($this->conn);
    }
    // Add ticket
    function addTicket($TicketPrice, $Ticket_cust_profile) {
        $query = "INSERT INTO ticket(TicketPrice, Ticket_cust_profile) VALUES ('$TicketPrice', '$Ticket_cust_profile')";
        $result = mysqli_query($this->conn, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function displayTicket() {
        $query = "SELECT * FROM ticket";
        $result = mysqli_query($this->conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo '<table border="1">
                  <tr>
                      <th>TicketID</th>
                      <th>TicketPrice</th>
                      <th>Ticket_cust_profile</th>
                  </tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row['TicketID'] . "</td>
                    <td>" . $row['TicketPrice'] . "</td>
                    <td>" . $row['Ticket_cust_profile'] . "</td>
                  </tr>";
            }
            echo "</table>";
        } else {
            echo "No tickets found.";
        }
    }
        // Update ticket
        function updateTicket($TicketID, $TicketPrice, $Ticket_cust_profile) {
            $query = "UPDATE ticket SET TicketPrice='$TicketPrice', Ticket_cust_profile='$Ticket_cust_profile' WHERE TicketID='$TicketID'";
            $result = mysqli_query($this->conn, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
}






























?>