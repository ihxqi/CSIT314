<?php

include_once("../config.php");
session_start();

class Room
{
  public $conn;

  public function __construct()
  {
    $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    
  }

  public function __destruct()
  {
    mysqli_close($this->conn);
  }

  function addRoom($roomCapacity,$movieShowtime, $movieShowDate, $movie_id)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $query = "INSERT INTO cinema (roomCapacity, movieShowtime, movieShowDate, movie_id) VALUES ('$roomCapacity', '$movieShowtime', '$movieShowDate', '$movie_id')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    header('Location: manageRoom.php');

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  // function to display all cinema rooms
  function getRoom()
  { {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $query = "SELECT * FROM cinema ORDER BY roomNo ASC";
      $result = mysqli_query($conn, $query);
      $cinemaRooms = array(); 
      if ($result) {
        while ($res = mysqli_fetch_array($result)) {
          $cinemaRoom = array(); 
          $cinemaRoom['roomNo'] = $res['roomNo'];
          $cinemaRoom['roomCapacity'] = $res['roomCapacity'];
          $cinemaRoom['movieShowtime'] = $res['movieShowtime'];
          $cinemaRoom['movieShowDate'] = $res['movieShowDate'];
          $cinemaRoom['movie_id'] = $res['movie_id'];
          $cinemaRoom['roomStatus'] = $res['roomStatus'];
          $cinemaRooms[] = $cinemaRoom;
        }
      }
      return $cinemaRooms;
    }
  }

  public function updateRoom($roomNo, $roomCapacity,$movieShowtime, $movieShowDate, $movie_id)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $stmt = $conn->prepare("UPDATE cinema SET roomCapacity = ?, movieShowtime = ?, movieShowDate = ?, movie_id = ? WHERE roomNo = ?");
    $stmt->bind_param("issii", $roomCapacity, $movieShowtime, $movieShowDate, $movie_id, $roomNo);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function suspendRoom($roomNo)
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $sql = "UPDATE cinema SET roomStatus = 'Inactive' WHERE roomNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $roomNo);
    $stmt->execute();
    return $stmt->affected_rows;
  }

  public function activateRoom($roomNo): void
  {
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $stmt = $conn->prepare("UPDATE `cinema` SET `roomStatus` = 'Active' WHERE `roomNo` = ?");
    $stmt->bind_param("i", $roomNo);
    $stmt->execute();
    $stmt->close();
  }
}
