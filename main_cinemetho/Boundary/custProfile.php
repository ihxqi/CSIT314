<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';


if (isset($_POST['update'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $_SESSION['username'] = $username;
}
?>

<html>

<head>
	<title>Customer's profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../styles.css">
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
					<a href="../Boundary/custProfile.php">PROFILE</a>
					<a href="custHistory.html">PUCHASED TICKETS</a>
					<a href="../Boundary/userBooking.php">BUY TICKETS</a>
					<a href="#cinemas location">CINEMAS</a>
					<a href="../Boundary/movieListing.php">MOVIES</a>
				</div>
			</div>
		</section>
		<hr>
		<br><br>
		<section>
			<div class="form-box" style="text-align: center;">
				<h1 class="profile">My profile setting</h1><br>
				<div class="content" >
					<form action="custUpdate.php" method="post">
						<div class="user-details">
							<div class="input-box">
							<input type="text" placeholder="Username" readonly value="<?php echo htmlspecialchars($username); ?>">
							</div><br>
						</div><br>
						<input class="button" type="submit" name="update" value="Update Profile" style="margin:0.5em;"><br> <!-- Change the type to submit and add the name attribute -->
					</form>
				</div>
			</div>
		</section>
	</div>


	<script>
		function deactivate() {
			alert("You have successfully deactivated your account!")
		}
	</script>

</body>

</html>