<!doctype html>
	<html>
		<head>
			<meta charset = "utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Payment page</title>
			<link rel ="stylesheet" type="text/css"  href = "../styles.css">
			<link rel="stylesheet" type="text/css" href="../jquery.seat-charts.css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
			<script src="../jquery.seat-charts.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="../script.js"></script>
			<script>
				var count = 300; // Timer
				var redirect = "../Boundary/custHistory.php"; // Target URL, does not exist
				function countDown() 
				{
					var timer = document.getElementById("timer"); // Timer ID
					if (count > 0) 
					{
						count--;
						timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
						setTimeout("countDown()", 1000);
					} 
					else 
					{
						window.location.href = redirect;
					}
				}
				  
				function logout() 
				{
					// Code to handle logout
					console.log("Logged out");
					window.location.href = '../Boundary/index.php'; // redirect to login page after logout
				}
			</script>
		</head>

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
                    <a href="../Boundary/cu">E-TICKETS</a> <!-- need to wait for the file -->
                    <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                    <a href="../Boundary/movieListing.php">MOVIES</a>
					</div>
				</div> 
			</section>			
			<hr>
			<br><br>
			<section>
				<div class="container4">
				  <table style="width:100%;">
					<tr>
					  <th>Pyament QRCode:</th>
					</tr>

                    <tr>
					  <td>
						<p style="text-align: center;"> Scan the QR code to view your items and make payment. </p>
					  </td>
				  </tr>

					<tr>
					  <td>
						<div class="image" style="text-align: center;">
						  <img src="../Images/Scantopay.png">
						</div>
					  </td>
				  </tr>
					<tr>
					  <td colspan="2" style="text-align: center;">
						
					  </td>
					</tr>					  
				  </table>						 
						</div>					 
				</div>
			</section>
		</div>		
	</body>
</html>