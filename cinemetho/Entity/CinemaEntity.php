<?php

include_once("../config.php");
session_start();

class CinemaRoom
{
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    }

    public function __destruct() {
        mysqli_close($this->conn);
    }

    function addCinemaRoom($RoomNo, $Capacity) {
        global $connection;
      
        $query = "INSERT INTO cinema (RoomNo, Capacity) VALUES ('$RoomNo', '$Capacity')";
        $result = mysqli_query($connection, $query);
      
        if($result){
          return true;
        }else{
          return false;
        }
      }
      
      // function to display all cinema rooms
      function displayCinemaRoom() {
        global $conn;
      
        $query = "SELECT * FROM cinema";
        $result = mysqli_query($conn, $query);
      
        if($result && mysqli_num_rows($result) > 0){
          echo '<table border="1">
                <tr>
                    <th>Room Number</th>
                    <th>Capacity</th>
                    <th>Movie Showtime</th>
                    <th>Room Status</th>
                </tr>';
      
          while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>'.$row['RoomNo'].'</td>
                    <td>'.$row['Capacity'].'</td>
                    <td>'.$row['movieShowtime'].'</td>
                    <td>'.$row['roomStatus'].'</td>
                  </tr>';
          }
      
          echo '</table>';
        }else{
          echo "No cinema rooms found.";
        }
      }
      
      // function to update a cinema room's capacity
      function updateCinemaRoom($RoomNo, $newCapacity) {
        global $conn;
      
        $query = "UPDATE cinema SET Capacity = '$newCapacity' WHERE RoomNo = '$RoomNo'";
        $result = mysqli_query($conn, $query);
      
        if($result){
          return true;
        }else{
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