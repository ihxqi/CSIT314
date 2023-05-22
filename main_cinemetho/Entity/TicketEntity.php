<?php
include_once("../config.php");
class Ticket
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


  function addTicket($ticket_price, $ticket_cust_profile)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $sql = "INSERT INTO ticket (ticket_price, ticket_cust_profile) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $ticket_price, $ticket_cust_profile);
    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      header('Location: manageTicket.php');
      exit();
    } else {
      die("Error: " . mysqli_error($conn));
    }
  }


  // Update Ticket
  public function updateTicket($ticket_id, $ticket_price, $ticket_cust_profile)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $stmt = $conn->prepare("UPDATE ticket SET ticket_price = ?, ticket_cust_profile = ? WHERE ticket_id = ?");
    $stmt->bind_param("isi", $ticket_price, $ticket_cust_profile, $ticket_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function suspendTicket($ticket_id)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $sql = "UPDATE ticket SET ticket_status = 'Inactive' WHERE ticket_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $ticket_id);
    $stmt->execute();
    return $stmt->affected_rows;
  }

  public function activateTicket($ticket_id): void
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $stmt = $conn->prepare("UPDATE `ticket` SET `ticket_status` = 'Active' WHERE `ticket_id` = ?");
    $stmt->bind_param("i", $ticket_id);
    $stmt->execute();
    $stmt->close();
  }

  function searchTicket($search)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $search = mysqli_real_escape_string($conn, $search);
    $query = "SELECT * FROM ticket WHERE ticket_cust_profile LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $tickets = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $tickets;
  }
}
