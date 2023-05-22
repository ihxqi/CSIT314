<?php
include_once("../config.php");
session_start();
class FnB
{
    private $conn;
    // Function to add a new combo
    function addFnB($comboName, $comboImg, $comboPrice, $comboQuantity)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB); 
        $sql = "INSERT INTO fnb (comboName, comboImg, comboPrice, comboQuantity) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssii", $comboName, $comboImg, $comboPrice, $comboQuantity);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header('Location: manageFnB.php');
            exit();
        } else {
            die("Error: " . mysqli_error($conn));
        }
    }
    // Function to display all combos
    function getFnB()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM fnb";
        $result = mysqli_query($conn, $query);
        $fnbCombos = array(); // Changed variable name from $fnbCombo to $fnbCombos
        if ($result) {
            while ($res = mysqli_fetch_array($result)) {
                $fnbCombo = array(); // Changed variable name from $fnbCombo to $fnbCombo
                $fnbCombo['comboID'] = $res['comboID'];
                $fnbCombo['comboName'] = $res['comboName'];
                $fnbCombo['comboImg'] = $res['comboImg'];
                $fnbCombo['comboPrice'] = $res['comboPrice'];
                $fnbCombo['comboQuantity'] = $res['comboQuantity'];
                $fnbCombo['comboStatus'] = $res['comboStatus'];
                $fnbCombos[] = $fnbCombo; // Changed from $fnbCombo[] to $fnbCombos[]
            }
        }
        return $fnbCombos;
    }

    // Function to update a combo
    public function updateFnB($comboID, $comboName, $comboImg, $comboPrice, $comboQuantity)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE fnb SET comboName = ?, comboImg = ?, comboPrice = ?, comboQuantity = ? WHERE comboID = ?");
        $stmt->bind_param("ssiii", $comboName, $comboImg, $comboPrice, $comboQuantity, $comboID);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function suspendFnB($ComboID)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE fnb SET ComboStatus = 'Inactive' WHERE ComboID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ComboID);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    //Please do activate yourself//Please do activate yourself//Please do activate yourself
    public function activateFnB($ComboID): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE `fnb` SET `comboStatus` = 'Active' WHERE `comboID` = ?");
        $stmt->bind_param("i", $ComboID);
        $stmt->execute();
        $stmt->close();
    }


    function searchFnB($search)
    {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $search = mysqli_real_escape_string($conn, $search);
      $query = "SELECT * FROM fnb WHERE comboName LIKE '%$search%'";
      $result = mysqli_query($conn, $query);
  
      if (!$result) {
          die("Query failed: " . mysqli_error($conn));
      }
  
      $fnbCombos = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_close($conn);
      return $fnbCombos;
    }

    function DisplayFnb() {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM fnb WHERE comboStatus = 'Active'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $movies;
    }
}
