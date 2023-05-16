<?php
include_once("../Controller/getTicketCtl.php"); // need to change no such file yet


$ticketClt = new getTicketCtl();
$tickets = $ticketClt->getTicket();

//$userAccountCtl = new suspendUserProfile($user_profile);
//$userProfiles = $userAccountCtl->suspendUserProfile($user_profile);

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


<!DOCTYPE html>
<html>

<head>
	<title>Cinema Manager - Tickets' Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../cm_style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<a href="../Boundary/custProfile.php">TICKETS</a> <!-- need change -->
					<a href="../Boundary/custProfile.php">CINEMA ROOMS</a> <!-- need change -->
					<a href="../Boundary/manageMovies.php">MOVIES</a>
					<a href="../Boundary/manageF&b.php">F&B</a>
					<a class="active" href="cinemaManager.html">HOME</a> <!-- need change -->
				</div>
			</div>
		</section>

		<hr>
		<br><br>

		<div class="container1" style="margin-top: -5%; margin-bottom: 3%;">
			<div class="search">
				<input type="text" class="searchTerm" id="search" placeholder="Search by Customer Profile">
				<button type="submit" class="searchButton">
					<i class="fa fa-search"></i>
				</button>
			</div>

			<div class="topnav" style="margin-top: 1%;">
				<a onclick="location.href='addTicket.php';" style="margin-left: 5%;">
					<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Ticket
			</div>
		</div>

		<table id="ticketTable" class="CMtable">
			<tr>
				<th>Customer Profiles</th>
				<th>Prices</th>
				<th>Status</th>
			</tr>
			<tr>
				<?php
				foreach ($tickets as $ticket) {
					echo "<td>" . $ticket['ticket_id'] . "</td>";
					echo "<td>" . $ticket['ticket_price'] . "</td>";
					echo "<td>" . $ticket['ticket_cust_profile'] . "</td>";
					echo "<td>" . $ticket['ticket_status'] . "</td>";
					echo "<td><a href=\"updateRoom.php?room_no={$ticket['ticket_id']}\" class='button'>Update</a> | 
				<a href=\"suspendRoom.php?room_no={$ticket['ticket_id']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a>| 
				<a href=\"activateRoom.php?room_no={$ticket['ticket_id']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
					echo "</tr>";
				}
				?>
			</tr>
		</table><br>

	</div>


	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById('search').addEventListener('input', function(e) {
				var searchVal = e.target.value.toLowerCase();
				var table = document.getElementById('ticketTable');

				for (var i = 1, row; row = table.rows[i]; i++) {
					var ticket = row.cells[0].innerText;

					if (ticket.toLowerCase().includes(searchVal)) {
						row.style.display = "";
					} else {
						row.style.display = ('none');
					}
				}
			});
		});

		var profile = document.querySelectorAll(".editable");

		for (var i = 0; i < profile.length; i++) {
			profile[i].addEventListener("mousedown", function(e) {
				if (!this.querySelector('select')) {
					var select = document.createElement('select');
					var options = ['Adult', 'Child', 'Student', 'Senior Citizen'];
				}

				// Create options and append to select
				for (var j = 0; j < options.length; j++) {
					var option = document.createElement('option');
					option.value = options[j];
					option.text = options[j];
					select.appendChild(option);
				}

				// When an option is selected, replace the select with the chosen option
				select.addEventListener('change', function(e) {
					this.parentElement.innerText = this.value;
				});

				select.addEventListener('click', function(e) {
					e.stopPropagation();
				});

				// Replace cell content with select
				this.innerText = '';
				this.appendChild(select);
				select.focus();
			});
		}

		function addTicket() {
			var table = document.getElementById('ticketTable');
			var row = table.insertRow(-1);

			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);

			cell2.contentEditable = "true";
			cell2.innerHTML = "$0";

			// Create the select element and options for the seat type
			var select = document.createElement('select');
			select.innerHTML = '<option value="not set">Not Set</option><option value="adult">Adult</option><option value="student">Student</option><option value="child">Child</option><option value="senior citizen">Senior Citizen</option>';
			select.className = 'editable';

			// Append the select element to the third cell
			cell1.appendChild(select);
		}

		function setRowEditable(row, editable) {
			for (var i = 0; i < row.cells.length; i++) {
				var cell = row.cells[i];
				if (cell.querySelector('select')) {
					cell.querySelector('select').disabled = !editable;
				} else if (i !== row.cells.length - 1) {
					cell.contentEditable = editable ? "true" : "false";
					if (!editable) {
						cell.style.backgroundColor = "grey";
					} else {
						cell.style.backgroundColor = "";
					}
				}
			}
		}

		function updateTicket() {
			var table = document.getElementById('ticketTable');
			for (var i = 1, row; row = table.rows[i]; i++) {
				var profileDropdown = row.cells[1].querySelector('select');
				var profile = profileDropdown ? profileDropdown.value : "Not Set";
				var price = row.cells[1].innerText;
				console.log('Customer Profile: ' + profile + ', Price: ' + price);
			}
			alert("Update succuessfully!");
		}

		function logout() {
			// Code to handle logout
			console.log("Logged out");
			window.location.href = 'index.html'; // redirect to login page after logout
		}
	</script>
</body>

</html>