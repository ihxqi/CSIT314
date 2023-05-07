<!DOCTYPE html>

<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'\cinemetho\login\class.php');

// check if user is logged in
if (!isset($_SESSION['login']) || !$_SESSION['login']) {
	// redirect to login page
	header("Location: index.php");
	exit();
  }
  

$user = new User();

if (isset($_POST['logout'])) {
  $user->logout();
  header("Location: index.php"); 
  exit();
}
?>
<html>
  <head>
    <title>Customer's profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset = "utf-8">
	<link rel ="stylesheet" href = "../styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
  </head>

  <body>
	<div class="white-box">
		<section>
			<div class="container1">
				<div class="logo">
					<img src="../Images/cinemethologo.jpeg">
				</div>
		
				<div class="topnav">
					<a href="custProfile.html">PROFILE</a>
					<a href="custHistory.html">PUCHASED TICKETS</a>
					<a href="booking.html">BUY TICKETS</a>
					<a href="#cinemas location">CINEMAS</a>
					<a href="../MovieListing/movieListing.php">MOVIES</a>
				</div>
			</div> 
		</section>
		<hr>
		<br><br>
		<section>
			<div class="form-box" style="text-align: center;">
				<h1 class="profile">My profile setting</h1><br>
				<div class="content">
					<form>
						<div class="user-details">         
							<div class="input-box">
								<input type="text" placeholder="Username" readonly>
							</div><br>
							<div class="input-box">
								<span class="details">Birthday: (optional)</span>
								<input type="date">
							</div><br>
							<div class="input-checkbox">
								<span class="details">Seat preference:</span>
								<input type="checkbox" id="front" name="front" value="front">
								<label for="front">Front Row</label>
								<input type="checkbox" id="middle" name="middle" value="middle">					
								<label for="middle">Middle Row</label>
								<input type="checkbox" id="back" name="back" value="back">									
								<label for="back">Back Row</label>
							</div><br>
							<div class="loyalty">
								<span class="details">Loyalty points: </span>
								<input type="hidden" readonly><span><strong>0 pts<strong></span>
							</div>
						</div><br>       
							<input class="button" type="button" onclick="update()" formaction="cMovie.html" value="Update Profile" style="margin:0.5em;"><br>
							<input class="button" type="submit" onclick="deactivate()" formaction="index.html" value="Deactivate Account" style="margin:0.5em;"><br>
							<input class="button" type="submit" name="logout" onclick="clearForm()" formaction="..\index.php"  value="Log Out"  style="margin:0.5em;"><br>
					</form>
				</div>
			  </div>
		</section>
	</div>
	
  
	<script>
		function deactivate()
		{
			alert("You have successfully deactivated your account!")
		}
	</script>
	<script>
		function update()
		{
			alert("You have successfully updated your profile!")
		}
	</script>
  </body>
</html>