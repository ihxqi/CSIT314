<?php

include_once("../config.php");
$conn = mysqli_connect(HOST, USER, PASS, DB);

// Assuming you have established a database connection
// Retrieve the form values
$customerSelection = $_POST['customerselection'];
$movieSelection = $_POST['movieselection'];
$day = $_POST['day'];
$seatSelection = $_POST['selected-seats'];

// Prepare the SQL query
$sql = "INSERT INTO booking (userBooked, QRCode, bookingDate, seatNo, roomNo)
        VALUES ('$customerSelection', '../Images/Scantopay.png', '$day', '$seatSelection', (
            SELECT roomNo FROM cinema WHERE movie_id = '$movieSelection' AND movieShowDate = '$day'
        ))";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Booking successfully added to the database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
// Function to generate a QR code

?>
