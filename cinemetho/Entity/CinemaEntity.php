<?php

include_once("../config.php");
session_start();

class CinemaRoom
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

  function addCinemaRoom($RoomNo, $Capacity)
  {
    global $connection;

    $query = "INSERT INTO cinema (RoomNo, Capacity) VALUES ('$RoomNo', '$Capacity')";
    $result = mysqli_query($connection, $query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  // function to display all cinema rooms
  function getCinemaRoom()
  { {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $query = "SELECT * FROM cinema ORDER BY roomNo ASC";
      $result = mysqli_query($conn, $query);
      $cinemaRooms = array(); // Changed variable name from $fnbCombo to $fnbCombos
      if ($result) {
        while ($res = mysqli_fetch_array($result)) {
          $cinemaRoom = array(); // Changed variable name from $fnbCombo to $fnbCombo
          $cinemaRoom['roomNo'] = $res['roomNo'];
          $cinemaRoom['roomCapacity'] = $res['roomCapacity'];
          $cinemaRoom['movieShowtime'] = $res['movieShowtime'];
          $cinemaRoom['movieShowDate'] = $res['movieShowDate'];
          $cinemaRoom['movie_id'] = $res['movie_id'];
          $cinemaRoom['roomStatus'] = $res['roomStatus'];
          $cinemaRooms[] = $cinemaRoom; // Changed from $fnbCombo[] to $fnbCombos[]
        }
      }
      return $cinemaRooms;
    }
  }

  // function to update a cinema room's capacity
  function updateCinemaRoom($RoomNo, $newCapacity)
  {
    global $conn;

    $query = "UPDATE cinema SET Capacity = '$newCapacity' WHERE RoomNo = '$RoomNo'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  //Please do activate yourself
  public function suspendRoom($RoomNo)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $sql = "UPDATE cinema SET roomStatus = 'Inactive' WHERE RoomNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $RoomNo);
    $stmt->execute();
    return $stmt->affected_rows;
  }

  //Please do activate yourself//Please do activate yourself//Please do activate yourself
  public function activate($RoomNo): void
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $sql = "UPDATE  SET  = 'Active' WHERE  = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $RoomNo);
    $stmt->execute();
    $stmt->close();
  }
}
