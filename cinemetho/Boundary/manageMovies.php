<!DOCTYPE html>
<html>
    <head>
		<title>Cinema Manager - Movies</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" href = "../styles.css">
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
			<br><br>
			<div class="container1" style="margin-top: -5%;">
				<div class="search">
					<input type="text" class="searchTerm" id="search" placeholder="Search by Movie Title">
					<button type="submit" class="searchButton">
						<i class="fa fa-search"></i>
					</button>
				</div>

				<div class="topnav" style="margin-top: 1%;">				
				<a onclick="location.href='addMovies.php';" style="margin-left: 5%;">
                        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Movie
                    </a>
					
				</div>
			</div>
			<br><br>
			
			<table id="movieTable" class="CMtable">
				<tr>
					<th>Image</th>
					<th>Title</th>
					<th>Genre</th>
					<th>MPA Rating</th>
					<th>Language</th>
					<th>Duration</th>
					<th>Synopsis</th>
					<th>Status</th>
				</tr>
				<tr>
				<?php 
                        foreach ($userAccount as $userAccount) { // Need change 
                            echo "<tr class='border-bottom'>";
							echo "<td>" . $userAccount['combo_id'] . "</td>";
                            echo "<td>" . $userAccount['combo_name'] . "</td>";
                            echo "<td>" . $userAccount['combo_description'] . "</td>";
                            echo "<td>" . $userAccount['combo_price'] . "</td>";
                            echo "<td>" . $userAccount['combo_quantity'] . "</td>";
                            echo "<td><a href=\"updateMovies.php?combo_id={$userAccount['combo_id']}\" class='button'>Update</a> | <a href=\"suspendMovies.php?user_id={$userAccount['combo_id']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a>| <a href=\"activateMovies.php?user_id={$userAccount['combo_id']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
                            echo "</tr>";
                        }
                    ?>
				</tr>		
			</table><br>
				
		</div>
		
		<script>
			document.addEventListener("DOMContentLoaded", function() 
			{						
			});						

			var genre = document.querySelectorAll(".editable");

			for(var i = 0; i < genre.length; i++)
			{
				genre[i].addEventListener('mousedown', function(e)
				{
					if (!this.querySelector('select'))
					{
						var select = document.createElement('select');
						var options = ['Not Set', 'Thriller', 'Horror', 'Romance', 'Sci-fi']; 
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
				
				var mpaRating = document.querySelectorAll(".editableMpa");

				for(var i = 0; i < mpaRating.length; i++)
				{
					mpaRating[i].addEventListener('mousedown', function(e)
					{
						if (!this.querySelector('select'))
						{
							var select = document.createElement('select');
							var options = ['Not Set', 'PG', 'PG13', 'M18', 'NC16'];  // The MpA ratings you want in the dropdown
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
				
				var language = document.querySelectorAll(".editableLanguage");

				for(var i = 0; i < language.length; i++)
				{
					language[i].addEventListener('mousedown', function(e)
					{
						if (!this.querySelector('select'))
						{
							var select = document.createElement('select');
							var options = ['Not Set', 'English', 'French', 'Chinese', 'Japanese']; 

							for(var j = 0; j < options.length; j++)
							{
								var option = document.createElement('option');
								option.value = options[j];
								option.text = options[j];
								select.appendChild(option);
							}

							select.addEventListener('change', function(e)
							{
								this.parentElement.innerText = this.value;
							});
							
							select.addEventListener('click', function(e)
							{
								e.stopPropagation();
							});

							this.innerText = '';
							this.appendChild(select);
							
							// Check if the toggle switch is checked and disable the dropdown box accordingly
							var toggleSwitch = this.closest("tr").querySelector(".toggleSwitch");
							if (toggleSwitch) 
							{
								select.disabled = !toggleSwitch.checked;
							}
							select.focus();
						}
					});
				}																					
		
			function addMovie() 
			{
				var table = document.getElementById('movieTable');
				var row = table.insertRow(-1);

				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);
				var cell6 = row.insertCell(5);
				var cell7 = row.insertCell(6);
				var cell8 = row.insertCell(7);
					
				cell2.contentEditable = "true";				
				cell6.contentEditable = "true";
				cell7.contentEditable = "true";

				var input = document.createElement('input');
				input.type = "file";
				input.accept = "Images/*";
				input.onchange = previewImage;
				cell1.appendChild(input);
				var img = document.createElement('img');
				img.id = 'preview' + table.rows.length;
				img.classList.add("preview");
				img.style.width = "100px";
				img.style.height = "100px";
				cell1.appendChild(img);
					
				cell2.innerHTML = "New Movie Name";						
				cell6.innerHTML = " Minutes";
				cell7.innerHTML = " ";	

				// Create the select element and options for the genre
				var select = document.createElement('select');
				select.innerHTML = '<option value="not set">Not Set</option><option value="thriller">Thriller</option><option value="horror">Horror</option><option value="romance">Romance</option><option value="sci-fi">Sci-fi</option>';
				select.className = 'editable';

				// Append the select element to the third cell
				cell3.appendChild(select);
				
				var select = document.createElement('select');
				select.innerHTML = '<option value="not set">Not Set</option><option value="PG">PG</option><option value="PG13">PG13</option><option value="M18">M18</option><option value="NC16">NC16</option><option value="M18">M18</option>';
				select.className = 'editableMpa'; 

				// Append the select element to the third cell
				cell4.appendChild(select);
				
				var select = document.createElement('select');
				select.innerHTML = '<option value="not set">Not Set</option><option value="english">English</option><option value="french">French</option><option value="chinese">Chinese</option><option value="japanese">Japanese</option>';
				select.className = 'editableLanguage';

				// Append the select element to the third cell
				cell5.appendChild(select);				
			}	
							
			function setRowEditable(row, editable) 
			{
				for (var i = 0; i < row.cells.length; i++) 
				{	
					var cell = row.cells[i];
					var selectElem = cell.querySelector('select');
					var inputElem = cell.querySelector('input[type="file"]');
					
					if (selectElem) 
					{
						selectElem.disabled = !editable;
					} 
					else if (inputElem)
					{
						inputElem.disabled = !editable;
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
			
			function previewImage(event) 
			{
				var input = event.target;
				if (input.files && input.files[0]) 
				{
					var reader = new FileReader();
					reader.onload = function()
				{
					var dataURL = reader.result;
					var preview = input.parentElement.querySelector(".preview");
					preview.src = dataURL;
				};
				reader.readAsDataURL(input.files[0]);
				}
			}
				
			function updateMovie() 
			{
				var table = document.getElementById('movieTable');
				for (var i = 1, row; row = table.rows[i]; i++) 
				{
					var image = row.cells[0].innerText;
					var title = row.cells[1].innerText;				
					var genreDropdown = row.cells[2].querySelector('select');
					var genre = genreDropdown ? genreDropdown.value : "Not Set";
					var ratingDropdown = row.cells[3].querySelector('select');
					var rating = ratingDropdown ? ratingDropdown.value : "Not Set";
					var languageDropdown = row.cells[4].querySelector('select');
					var language = languageDropdown ? languageDropdown.value : "Not Set";
					var duration = row.cells[5].innerText;
					var synopsis = row.cells[6].innerText;
					console.log('Image: ' + image + ', Title: ' + title + ', Genre: ' + genre + ', Rating: ' + rating + ', Language:' + language + 'Duration: ' + duration + ', Synopsis: ' + synopsis);
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