<!DOCTYPE html>
<html>
    <head>
        <title>Cinema Manager - F&B</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a href="#" onclick="logout()">LOG OUT</a>
                        <a href="../Boundary/custProfile.php">TICKETS</a> <!-- need change -->
                        <a href="../Boundary/custProfile.php">CINEMA ROOMS</a> <!-- need change -->
                        <a href="../Boundary/manageMovies.php">MOVIES</a>
                        <a href="../Boundary/manageF&b.php">F&B</a>
                        <a class="active" href="cinemaManager.html">HOME</a> <!-- need change -->
                    </div>
                </div>
            </section>
            <hr>
            <br>
            <br>
            <div class="container1" style="margin-top: -3%; margin-bottom: 3%; ">
                <div class="search">
                    <input type="text" class="searchTerm" id="search" placeholder="Search by Combo Name">
                    </button>
                </div>
                <div class="topnav" style="margin-top: -2%;">
                    <a onclick="location.href='addF&b.php';" style="margin-left: 5%;">
                        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Food
                    </a>
                </div>
            </div>
        
			<table id="foodTable" class="CMtable" style="width:100%">
				<tr>
					<th>Combo Names</th>
					<th>Description</th>
					<th>Prices</th>
					<th>Quantity</th>
					<th>Actions</th>
				</tr>
				<?php 
                        foreach ($userAccount as $userAccount) { // Need change 
                            echo "<tr class='border-bottom'>";
							echo "<td>" . $userAccount['combo_id'] . "</td>";
                            echo "<td>" . $userAccount['combo_name'] . "</td>";
                            echo "<td>" . $userAccount['combo_description'] . "</td>";
                            echo "<td>" . $userAccount['combo_price'] . "</td>";
                            echo "<td>" . $userAccount['combo_quantity'] . "</td>";
                            echo "<td><a href=\"updateF&b.php?combo_id={$userAccount['combo_id']}\" class='button'>Update</a> | <a href=\"suspendF&b.php?user_id={$userAccount['combo_id']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a>| <a href=\"activatef&b.php?user_id={$userAccount['combo_id']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
                            echo "</tr>";
                        }
                    ?>
			</table>
        <br>
        <br>
        </div>
		
		
		<script>
			document.addEventListener("DOMContentLoaded", function() 
			{
				document.getElementById('search').addEventListener('input', function(e) 
				{
					var searchVal = e.target.value.toLowerCase();
					var table = document.getElementById('foodTable');

					for (var i = 1, row; row = table.rows[i]; i++) 
					{
						var food = row.cells[0].innerText;

						if (food.toLowerCase().includes(searchVal)) 
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

			function addFood() 
			{
				var table = document.getElementById('foodTable');
				var row = table.insertRow(-1);

				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);

				cell1.contentEditable = "true";
				cell2.contentEditable = "true";
				cell3.contentEditable = "true";
				cell4.contentEditable = "true";

				cell1.innerHTML = "New Food";
				cell2.innerHTML = " ";
				cell3.innerHTML = "$0";
				cell4.innerHTML = " ";

				updateToggleSwitchListeners();
			}

			function setRowEditable(row, editable) 
			{
				for (var i = 0; i < row.cells.length; i++) 
				{
					if (i !== row.cells.length - 1) 
					{
						row.cells[i].contentEditable = editable ? "true" : "false";
					}
				}
			}

			function updateFood() 
			{
				var table = document.getElementById('foodTable');
				for (var i = 1, row; row = table.rows[i]; i++) 
				{
					var food = row.cells[0].innerText;
					var description = row.cells[1].innerText;
					var price = row.cells[2].innerText;
					var quantity = row.cells[3].innerText;
					console.log('Food: ' + food + ', Description: ' + description + ', Price: ' + price + ', Quantity: ' + quantity);
				}
							
				alert("Update succuessfully!");
			}

			function logout() 
			{			
				console.log("Logged out");
				window.location.href = 'index.html';
			}
		</script>
	</body>
</html>