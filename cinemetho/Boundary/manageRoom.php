<?php
include_once("../Controller/getCinemaRoomCtl.php");

$roomNo = "";
$roomCapacity = "";
$movieShowtime = "";
$movieShowDate = "";
$movie_id = "";
$roomStatus = "";

$cinemaRoomCtl = new getCinemaRoomCtl();
$cinemaRooms = $cinemaRoomCtl->getCinemaRoom();
?>


<!DOCTYPE html>
<html>

<head>
	<title>Cinema Manager - Cinema Rooms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../cm_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
</head>
<style>



</style>

<body>
	<div class="white-box">
		<section>
			<div class="container1">
				<div class="logo">
					<img src="../Images/cinemethologo.jpeg">
				</div>

				<div class="topnav">
					<a href="#" onclick="logout()">LOG OUT</a>
					<a href="../Boundary/manageTicket.php">TICKETS</a>
					<a href="../Boundary/manageRoom.php">CINEMA ROOMS</a>
					<a href="../Boundary/manageMovies.php">MOVIES</a>
					<a href="../Boundary/manageFnb.php">F&B</a>
					<a class="active" href="manageMovies.php">HOME</a>
				</div>
			</div>
		</section>

		<hr>
		<br><br>
		<div class="container1" style="margin-top: -5%;">
			<div class="search">
				<input type="text" class="searchTerm" id="search" placeholder="Search by Room No.">
				<button type="submit" class="searchButton">
					<i class="fa fa-search"></i>
				</button>
			</div>

			<div class="topnav" style="margin-top: 1%;">
				<a onclick="location.href='addRoom.php';" style="margin-left: 5%;">
					<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Room
				</a>
			</div>
		</div>
		<br><br>

		<table id="roomTable" class="CMtable">
			<tr>
				<th>Room No.</th>
				<th>Capacities</th>
				<th>ShowTime</th>
				<th>ShowDate</th>
				<th>Movie ID</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
			<?php
			foreach ($cinemaRooms as $cinemaRoom) {
				echo "<tr>";
				echo "<td>" . $cinemaRoom['roomNo'] . "</td>";
				echo "<td>" . $cinemaRoom['roomCapacity'] . "</td>";
				echo "<td>" . $cinemaRoom['movieShowtime'] . "</td>";
				echo "<td>" . $cinemaRoom['movieShowDate'] . "</td>";
				echo "<td>" . $cinemaRoom['movie_id'] . "</td>";
				echo "<td>" . $cinemaRoom['roomStatus'] . "</td>";
				echo '<td>
				<a href="updateRoom.php?roomNo=' . $cinemaRoom['roomNo'] . '&roomCapacity=' . $cinemaRoom['roomCapacity'] . '&movieShowtime=' . $cinemaRoom['movieShowtime'] . '&movieShowDate=' . $cinemaRoom['movieShowDate'] . '&movie_id=' . $cinemaRoom['movie_id'] . '">Update</a> |
				<a href="suspendRoom.php?roomNo=' . $cinemaRoom['roomNo'] . '" onClick="return confirm(\'Are you sure you want to suspend?\')">Suspend</a> |
				<a href="activateRoom.php?roomNo=' . $cinemaRoom['roomNo'] . '" onClick="return confirm(\'Are you sure you want to activate?\')">Activate</a>
			</td>';
				echo "</tr>";
			}
			?>
		</table><br>

	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById('search').addEventListener('input', function(e) {
				var searchVal = e.target.value.toLowerCase();
				var table = document.getElementById('roomTable');

				for (var i = 1, row; row = table.rows[i]; i++) {
					var room = row.cells[0].innerText;

					if (room.toLowerCase().includes(searchVal)) {
						row.style.display = "";
					} else {
						row.style.display = ('none');
					}
				}
			});
		});


		function logout() {
			// Code to handle logout
			console.log("Logged out");
			window.location.href = 'index.html'; // redirect to login page after logout
		}
	</script>
</body>

</html>