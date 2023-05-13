<?php
include_once("../config.php");
session_start();
class Fnb
{
    private $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Function to add a new combo
    function addCombo($ComboID, $ComboName, $ComboImg, $ComboPrice, $ComboQuantity)
    {
        global $conn;
        $sql = "INSERT INTO fnb (ComboID, ComboName, ComboImg, ComboPrice, ComboQuantity, ComboStatus) VALUES ('$ComboID', '$ComboName', '$ComboImg', '$ComboPrice', '$ComboQuantity', 'Active')";

        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    // Function to display all combos
    function displayCombo()
    {
        global $conn;
        $sql = "SELECT * FROM fnb";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["ComboID"] . "</td><td>" . $row["ComboName"] . "</td><td>" . $row["ComboImg"] . "</td><td>" . $row["ComboPrice"] . "</td><td>" . $row["ComboQuantity"] . "</td><td>" . $row["ComboStatus"] . "</td><td><a href='updateCombo.php?id=" . $row["ComboID"] . "'>Edit</a></td></tr>";
            }
        } else {
            echo "No combos found.";
        }
    }

    // Function to update a combo
    function updateCombo($ComboID)
    {
        global $conn;
        $sql = "UPDATE fnb SET ComboStatus='Inactive' WHERE ComboID='$ComboID'";

        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }



    public function suspendCombo($ComboID)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE fnb SET ComboStatus = 'Inactive' WHERE ComboID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ComboID);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    //Please do activate yourself//Please do activate yourself//Please do activate yourself
    public function activate($ComboID): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE  SET  = 'Active' WHERE  = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ComboID);
        $stmt->execute();
        $stmt->close();
    }
}
