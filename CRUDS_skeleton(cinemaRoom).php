<?php
//connect to the database
$host = '127.0.0.1';
$user = 'root@localhost';
$password = '1234';
$database = 'cinemetho';

$conn = mysqli_connect($host, $user, $password, $database);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//CREATE
if (isset($_POST['submit'])) {
    $roomNo = $_POST['roomNo'];
    $numOfSeats = $_POST['noOfSeats'];
    $seat_type = $_POST['seat_type'];
    $cinema_avail = $_POST['cinema_avail'];

    $sql = "INSERT INTO cinema (roomNo, noOfSeats, seat_type, cinema_avail) VALUES ('$roomNo', '$noOfSeats', '$seat_type', '$cinema_avail')";

    if (mysqli_query($conn, $sql)) {
        echo "New Cinema Room Created successfully";
    } else {
        echo "Error Creating New Cinema Room: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//RETRIEVE
$sql = "SELECT * FROM cinema";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Cinema Room No: " . $row['roomNo'] . "Seats Available: " . $row['noOfSeats'] . "Seat Type: " . $row['seat_type'] . "Availability: " . $row['cinema_avail'] . "<br>";
    }
} else {
    echo "0 results";
}

//UPDATE
if (isset($_POST['update'])) {
    $roomNo = $_POST['roomNo'];
    $numOfSeats = $_POST['noOfSeats'];
    $seat_type = $_POST['seat_type'];
    $cinema_avail = $_POST['cinema_avail'];

    $sql = "UPDATE users SET noOfSeats='$numOfSeats', seat_type='$seat_type', cinema_avail='$cinema_avail' WHERE roomNo='$roomNo'";

    if (mysqli_query($conn, $sql)) {
        echo "Cinema Room updated successfully";
    } else {
        echo "Error Updating Cinema Room: " . mysqli_error($conn);
    }
}

//DELETE
if (isset($_POST['delete'])) {
    $roomNo = $_POST['roomNo'];

    $sql = "DELETE FROM users WHERE roomNo='$roomNo'";

    if (mysqli_query($conn, $sql)) {
        echo "Cinema Room Deleted Successfully";
    } else {
        echo "Error Deleting Cinema Room " . mysqli_error($conn);
    }
}

//close connection
mysqli_close($conn);

?>

<html>
    <head>
	<title>Cinema Manager - Cinema Rooms</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel ="stylesheet" href = "styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    </head>
	<style>
		.search-results 
		{
			margin-top: 20px;
		}
		
		.box 
		{
			display: block;
		}
		
		.hidden
		{
			display: none;
		}
		
		.switch 
		{			
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch input 
		{ 
			opacity: 0;
			width: 0;
			height: 0;
		}

		.slider 
		{
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #FF160C;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before 
		{
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: black;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider 
		{
			background-color: #0FFF50;
		}

		input:focus + .slider 
		{
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before 
		{
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round 
		{
			border-radius: 34px;
		}

		.slider.round:before 
		{
			border-radius: 50%;
		}
	</style>
	<body>
		<div class="white-box">
			<section>
				<div class="container1">
					<div class="logo">
						<img src="Images/cinemethologo.jpeg">
					</div>
		
					<div class="topnav">
						<a href="index.html" onclick="logout()">LOG OUT</a>
						<a href="tickets.html">TICKETS</a>
						<a href="cinemaRooms.html">CINEMA ROOMS</a>  
						<a href="movies.html">MOVIES</a>    
						<a href="f&b.html">F&B</a>                				
						<a class="active" href="cinemaManager.html">HOME</a>
					</div>
				</div> 
			</section>

			<hr>
			<br><br>
			<div class="search-container">			
					<input type="text" id="search" placeholder="Search by room no.">
					<div class="search-results"></div>
			</div>
			<table id="roomTable" border="1">
			<tr>
				<th>Room No.</th>
				<th>Capacities</th>
				<th>Seat Types</th>
				<th>Status</th>
			</tr>
			<tr>
				<td contenteditable="true">1</td>
				<td contenteditable="true">135</td>
				<td class="editable">Not Set</td>
				<td>		
					<label class="switch">
						<input type="checkbox" class="toggleSwitch" checked>
						<span class="slider round"></span>
					</label>
				</td>	
			</tr>		
			</table><br>
			
			<button onclick="addRoom()">Add Room</button>
			<button onclick="updateRoom()">Update Room</button>		
		</div>
		
		<script>
			document.addEventListener("DOMContentLoaded", function() 
			{
				updateToggleSwitchListeners();
				document.getElementById('search').addEventListener('input', function(e) 
				{
					var searchVal = e.target.value.toLowerCase();
					var table = document.getElementById('roomTable');

					for (var i = 1, row; row = table.rows[i]; i++) 
					{
						var room = row.cells[0].innerText;				

						if (room.toLowerCase().includes(searchVal)) 
						{
							row.style.display = "";
						}	 
						else 
						{
							row.style.display = ('none');
						}
					}
				});
			});
				
			var seat = document.querySelectorAll(".editable");

			for(var i = 0; i < seat.length; i++)
			{
				seat[i].addEventListener("mousedown", function(e)
				{
					if (!this.querySelector('select'))
					{
						var select = document.createElement('select');
						var options = ['Standard', 'Premium', 'VIP']; 
					}
				
					// Create options and append to select
					for(var j = 0; j < options.length; j++)
					{
						var option = document.createElement('option');
						option.value = options[j];
						option.text = options[j];
						select.appendChild(option);
					}
				
					// When an option is selected, replace the select with the chosen option
					select.addEventListener('change', function(e)
					{
						this.parentElement.innerText = this.value;
					});
					
					select.addEventListener('click', function(e)
					{
						e.stopPropagation();
					});
				
					// Replace cell content with select
					this.innerText = '';
					this.appendChild(select);					
					// Check if the toggle switch is checked and disable the dropdown box accordingly
					var toggleSwitch = this.closest("tr").querySelector(".toggleSwitch");
					if (toggleSwitch) 
					{
						select.disabled = !toggleSwitch.checked;
					}
					select.focus();				
				});
			}
			
			function updateToggleSwitchListeners() 
			{
				var switches = document.querySelectorAll('.toggleSwitch');
				for (var i = 0; i < switches.length; i++) 
				{
					switches[i].removeEventListener('change', toggleSwitchListener);
					switches[i].addEventListener('change', toggleSwitchListener);
				}
			}

			function toggleSwitchListener() 
			{
				var row = this.closest('tr');
				if (!this.checked) 
				{
					row.style.backgroundColor = 'grey';
					setRowEditable(row, false);
				} 
				else 
				{
					row.style.backgroundColor = '';
					setRowEditable(row, true);
				}
			}
			
			function addRoom() 
			{
				var table = document.getElementById('roomTable');
				var row = table.insertRow(-1);

				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);

				cell1.contentEditable = "true";
				cell2.contentEditable = "true";
				cell4.innerHTML = '<label class="switch"><input type="checkbox" class="toggleSwitch" checked><span class="slider round"></span></label>';

				cell1.innerHTML = "New Room No.";
				cell2.innerHTML = " ";
				
				// Create the select element and options for the seat type
				var select = document.createElement('select');
				select.innerHTML = '<option value="Standard">Standard</option><option value="Premium">Premium</option><option value="VIP">VIP</option>';
				select.className = 'editable';

				// Append the select element to the third cell
				cell3.appendChild(select);
				updateToggleSwitchListeners();
			}
			
			function setRowEditable(row, editable) 
			{
				for (var i = 0; i < row.cells.length; i++) 
				{
					var cell = row.cells[i];
					if (cell.querySelector('select')) 
					{
						cell.querySelector('select').disabled = !editable;
					} 
					else if (i !== row.cells.length - 1) 
					{
						cell.contentEditable = editable ? "true" : "false";
						if (!editable)
						{
							cell.style.backgroundColor = "grey";							
						}
						else
						{
							cell.style.backgroundColor = "";
						}
					}
				}
			}
			
			function updateRoom() 
			{
				var table = document.getElementById('roomTable');
				for (var i = 1, row; row = table.rows[i]; i++) 
				{
					var room = row.cells[0].innerText;
					var capacities = row.cells[1].innerText;
					var seatTypeDropdown = row.cells[2].querySelector('select');
					var seatType = seatTypeDropdown ? seatTypeDropdown.value : "Not Set";
					console.log('Room No.: ' + room + ', Capacities: ' + capacities + ', Seat Type: ' + seatType);
				}
			}
			
			function logout() 
			{
				// Code to handle logout
				console.log("Logged out");
				window.location.href = 'index.html'; // redirect to login page after logout
			}
		</script>
	</body>
</html>