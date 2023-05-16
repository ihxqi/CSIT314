<?php
include_once("../Controller/GetMovieCtl.php");
$movieCtl = new GetMovieCtl();
$movies = $movieCtl->getMovie();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Cinema Manager - Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles.css">
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
				<input type="text" class="searchTerm" id="search" placeholder="Search by Movie Title">
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
				<th>ID</th>
				<th>Title</th>
				<th>Synopsis</th>
				<th>Genre</th>
				<th>Language</th>
				<th>Duration</th>
				<th>MPA Rating</th>
				<th>Image</th>
				<th>Casts</th>
				<th>Director</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
				<?php
				foreach ($movies as $movie) { 
					echo "<tr class='border-bottom'>";
					echo "<td>" . $movie['movie_id'] . "</td>";
					echo "<td>" . $movie['movieTitle'] . "</td>";
					echo "<td>" . $movie['movieSynopsis'] . "</td>";
					echo "<td>" . $movie['movieGenre'] . "</td>";
					echo "<td>" . $movie['movieLanguage'] . "</td>";
					echo "<td>" . $movie['movieDuration'] . "</td>";
					echo "<td>" . $movie['mpaRating'] . "</td>";
					echo "<td>" . $movie['movieImage'] . "</td>";
					echo "<td>" . $movie['movieCast'] . "</td>";
					echo "<td>" . $movie['movieDirector'] . "</td>";
					echo "<td>" . $movie['movieStatus'] . "</td>"; 
					echo "<td><a href=\"updateMovies.php?movie_id={$movie['movie_id']}\" class='button'>Update</a> | 
						  <a href=\"suspendMovies.php?user_id={$movie['movie_id']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a> | 
						  <a href=\"activateMovies.php?user_id={$movie['movie_id']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
					echo "</tr>";
				}
				?>
			</tr>
		</table><br>

	</div>

	<script>
		function previewImage(event) {
			var input = event.target;
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function() {
					var dataURL = reader.result;
					var preview = input.parentElement.querySelector(".preview");
					preview.src = dataURL;
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

		document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('search');
        var table = document.getElementById('movieTable');
        var rows = table.getElementsByTagName('tr');

        searchInput.addEventListener('input', function(e) {
            var searchVal = e.target.value.toLowerCase();

            for (var i = 1; i < rows.length; i++) {
                var movie = rows[i].getElementsByTagName('td')[1].textContent.toLowerCase();

                if (movie.includes(searchVal)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
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