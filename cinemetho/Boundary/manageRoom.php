<!DOCTYPE html>
<html>
    <head>
	<title>Cinema Manager - Cinema Rooms</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel ="stylesheet" href = "cm_style.css">
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
						<img src="Images/cinemethologo.jpeg">
					</div>
		
					<div class="topnav">
					<a href="#" onclick="logout()">LOG OUT</a>
                        <a href="../Boundary/manageTicket.php">TICKETS</a>
                        <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> 
                        <a href="../Boundary/manageMovies.php">MOVIES</a>
                        <a href="../Boundary/manageF&b.php">F&B</a>
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
				<a onclick="location.href='addTicket.php';" style="margin-left: 5%;">
                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Ticket
                </a>					
				</div>
			</div>
			<br><br>			
			
			<table id="roomTable"class="CMtable" >
			<tr>
				<th>Room No.</th>
				<th>Capacities</th>				
				<th>Movie</th>
				<th>ShowTime</th>
				<th>ShowDate</th>
				<th>Status</th>
			</tr>
			<tr>
            <?php 
                foreach ($userAccount as $userAccount) { 
                echo "<td>" . $userAccount['room_no'] . "</td>";
                echo "<td>" . $userAccount['room_capacity'] . "</td>";
                echo "<td>" . $userAccount['room_movie'] . "</td>";
                echo "<td>" . $userAccount['room_showtime'] . "</td>";
                echo "<td>" . $userAccount['room_showdate'] . "</td>";
                echo "<td>" . $userAccount['room_status'] . "</td>";
                echo "<tr class='border-bottom'>";				
                echo "<td><a href=\"updateRoom.php?room_no={$userAccount['room_no']}\" class='button'>Update</a> | <a href=\"suspendRoom.php?room_no={$userAccount['room_no']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a>| <a href=\"activateRoom.php?room_no={$userAccount['room_no']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
                echo "</tr>";
                }
            ?>				
			</tr>		
			</table><br>
				
		</div>
		
		<script>
			document.addEventListener("DOMContentLoaded", function() 
			{
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
				
			var movie = document.querySelectorAll(".editable");

			for(var i = 0; i < movie.length; i++)
			{
				movie[i].addEventListener("mousedown", function(e)
				{
					if (!this.querySelector('select'))
					{
						var select = document.createElement('select');
						var options = ['John Wick', 'Alice in the wonderland']; 
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
					select.focus();				
				});
			}					
			
			function addRoom() 
			{
				var table = document.getElementById('roomTable');
				var row = table.insertRow(-1);

				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);
				var cell6 = row.insertCell(5);
				var cell7 = row.insertCell(6);

				cell1.contentEditable = "true";
				cell2.contentEditable = "true";
				cell4.contentEditable = "true";
				cell5.contentEditable = "true";

				cell1.innerHTML = "New Room";
				cell2.innerHTML = " ";
				cell4.innerHTML = " ";
				cell5.innerHTML = " ";
				
				// Create the select element and options for the seat type
				var select = document.createElement('select');
				select.innerHTML = '<option value="johnwick">John Wick</option><option value="aitw">Alice In The Wonderland</option>';
				select.className = 'editable';

				// Append the select element to the third cell
				cell3.appendChild(select);
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
					var movieDropdown = row.cells[2].querySelector('select');
					var movie = movieDropdown ? movieDropdown.value : "Not Set";
					var showtime = row.cells[4].innerText;
					var showdate = row.cells[5].innerText;
					console.log('Room No.: ' + room + ', Capacities: ' + capacities + ', Movie: ' + movie + ', ShowTime: ' + showtime + ', ShowDate: ' + showdate);
				}
				alert("Update succuessfully!");
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