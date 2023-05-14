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
				<a href="index.html" onclick="logout()">LOG OUT</a>
				<a href="../Boundary/custProfile.php">PROFILE</a>
				<a href="../Boundary/eTicket.php">E-TICKETS</a>
				<a href="../Boundary/userBooking.php">BUY TICKETS</a>
				<a href="../Boundary/movieListing.php">MOVIES</a>
			</div>
		</div> 
	</section>

	<hr>

	<div class="ticket-box">
    <div class="ticket">All Cinemetho E-Ticket</div><br><hr><br>
    <div class="content">
		<form>
			
			<div class="ticket-details">         
				<div class="input-box">
					<span class="booking" value="nbookingid">Booking Id: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="nmovie">Movie title: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="ndate">Date: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="ncombo">Combo: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="nseat">Seat No. </span>
					<input type="hidden" readonly>
				</div>					
			</div>
			
			<div class="ticket-details">         
				<div class="input-box">
					<span class="booking" value="obookingid">Booking Id: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="omovie">Movie title: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="odate">Date: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="ocombo">Combo: </span>
					<input type="hidden" readonly><br>
					<span class="booking" value="oseat">Seat No. </span>
					<input type="hidden" readonly>
				</div>					
			</div>
		</form>
    </div>
  </div>
	<script>
	
	</script>
</body>
</html>

