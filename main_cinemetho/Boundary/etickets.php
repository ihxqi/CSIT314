<?php
include_once("../Controller/getBookingCtl.php");

// Create an object of the DisplayMovierCtl class
$bookingInfo = new getBookingInfoCtl();
$user_id = $_SESSION['user_id'];
// Call the DisplayMovierCtl() function to get all movies
$bookings = $bookingInfo->getBookingInfo($user_id);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cinemetho - History</title>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D&D description</title>
	<link rel ="stylesheet" href = "../styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
</head>
</html>

<body>
<div class="white-box">
<section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
    
                <div class="topnav">
				<a href="../Boundary/index.php" onclick="logout()">LOG OUT</a>
                <a href="../Boundary/custProfile.php">PROFILE</a> 
                <a href="../Boundary/etickets.php">E-TICKETS</a> <!-- need to wait for the file -->
                <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                <a href="../Boundary/movieListing.php">MOVIES</a>
                </div>
            </div> 
        </section>

    <hr>

    <div class="ticket-box">
        <div class="ticket">Cinemetho E-Ticket</div><br><hr><br>
        <div class="content">
            <form>
                <h2>UPCOMING</h2>
                <div class="ticket-details">         
                    <div class="input-box">
                        <?php foreach ($bookings as $booking) { ?>
                            <p>Booking ID: <?php echo $booking['booking_id']; ?></p>
                            <p>Movie Title: <?php echo $booking['movieTitle']; ?></p>
                            <p>Movie Show Date: <?php echo $booking['movieShowDate']; ?></p>
                            <p>Combo Name: <?php echo $booking['comboName']; ?></p>
                            <p>Seat No: <?php echo $booking['seatNo']; ?></p>
                            <br>
                        <?php } ?>
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</div>
	<script>
	
	</script>
</body>
</html>

