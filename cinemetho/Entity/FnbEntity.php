<?php

class Fnb {
    private $conn;
    private $table_name = "fnb";
  
    public $combo_id;
    public $combo_name;
    public $combo_description;
    public $combo_price;
    public $combo_quantity;
    public $combo_action;

    public function __construct($db) {
        $this->conn = $db;
    }

    function retrieveCombo() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function createCombo() {
        $query = "INSERT INTO " . $this->table_name . "
                SET
                    ComboName=:combo_name,
                    ComboDescription=:combo_description,
                    ComboPrice=:combo_price,
                    ComboQuantity=:combo_quantity,
                    ComboAction=:combo_action";
  
        $stmt = $this->conn->prepare($query);
  
        $this->combo_name = htmlspecialchars(strip_tags($this->combo_name));
        $this->combo_description = htmlspecialchars(strip_tags($this->combo_description));
        $this->combo_price = htmlspecialchars(strip_tags($this->combo_price));
        $this->combo_quantity = htmlspecialchars(strip_tags($this->combo_quantity));
        $this->combo_action = htmlspecialchars(strip_tags($this->combo_action));
  
        $stmt->bindParam(":combo_name", $this->combo_name);
        $stmt->bindParam(":combo_description", $this->combo_description);
        $stmt->bindParam(":combo_price", $this->combo_price);
        $stmt->bindParam(":combo_quantity", $this->combo_quantity);
        $stmt->bindParam(":combo_action", $this->combo_action);
  
        if($stmt->execute()) {
            return true;
        }
  
        return false;
    }

    public function updateCombo($comboID, $comboName, $comboDesc, $comboPrice, $comboQty, $comboAction) {
        // Prepare the UPDATE query
        $stmt = $this->conn->prepare("UPDATE fnb SET ComboName=?, ComboDescription=?, ComboPrice=?, ComboQuantity=?, ComboAction=? WHERE ComboID=?");

        // Bind the parameters to the statement
        $stmt->bind_param("ssssii", $comboName, $comboDesc, $comboPrice, $comboQty, $comboAction, $comboID);

        // Execute the statement and check for any errors
        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }

        // Close the statement and connection
        $stmt->close();
        $this->conn->close();
    }

    public function suspendCombo($comboID) {
        $query = "UPDATE $this->table_name SET ComboAction = 0 WHERE ComboID = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param('i', $this->$comboID);

        if ($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);

        return false;
    }

}