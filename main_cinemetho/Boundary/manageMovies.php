<?php
include_once("../Controller/getMovieCtl.php");
include_once("../Controller/searchMovieCtl.php");

$movieImage = ""; 
$movieTitle = "";
$movieGenre = "";
$mpaRating = "";
$movieLanguage = "";
$movieDuration = "";
$movieSynopsis = "";
$movieCast = "";
$movieDirector = "";

$movieCtl = new getMovieCtl();
$movies = $movieCtl->getMovie();

$searchCtl = new searchMovieCtl();

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    if (!empty($search)) {
        $movies = $searchCtl->searchMovie($search);
    } else {
        // If search field is empty, retrieve all tickets
        $movies = $movieCtl->getMovie();
    }
} else {
    // If search field is not set, retrieve all tickets
    $movies = $movieCtl->getMovie();
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Cinema Manager - Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../ua_style.css">
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
					<a href="../Boundary/manageFnB.php">F&B</a>
					<a class="active" href="manageMovies.php">HOME</a>
				</div>
			</div>
		</section>

		<hr>
		<br><br>
		<div class="container1" style="margin-top: -5%;">
		<div class="search">
                <form method="POST">
                    <div class="search">
                        <form method="POST">
                            <div class="search-bar">
                                <input type="text" class="searchTerm" name="search" placeholder="Search by Title" style="height:100%; width:70%; margin-top: 4%;">
                                <button type="submit" class="searchButton" style="margin-top: -5%;">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>

			<div class="topnav" style="margin-top: 2%;">
				<a1 onclick="location.href='addMovie.php';" style="margin-left: 5%;">
					<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Movie
				</a1>
			</div>
		</div>
		<br><br>
		<table id="movieTable" class="CMtable" style="font-size: 11.5px;">
			<tr>
				<th style="font-size: 11.5px;">ID</th>
				<th style="font-size: 11.5px;">Title</th>
				<th style="font-size: 11.5px;">Synopsis</th>
				<th style="font-size: 11.5px;">Genre</th>
				<th style="font-size: 11.5px;">Language</th>
				<th style="font-size: 11.5px;">Duration</th>
				<th style="font-size: 11.5px;">MPA Rating</th>
				<th style="font-size: 11.5px;">Image</th>
				<th style="font-size: 11.5px;">Casts</th>
				<th style="font-size: 11.5px;">Director</th>
				<th style="font-size: 11.5px;">Status</th>
				<th style="font-size: 11.5px;">Actions</th>
			</tr>
            <?php foreach ($movies as $movie) : ?>
                <tr>
                    <td><?php echo $movie['movie_id']; ?></td>
                    <td><?php echo $movie['movieTitle']; ?></td>
                    <td><?php echo $movie['movieSynopsis']; ?></td>
                    <td><?php echo $movie['movieGenre']; ?></td>
                    <td><?php echo $movie['movieLanguage']; ?></td>
                    <td><?php echo $movie['movieDuration']; ?></td>
                    <td><?php echo $movie['mpaRating']; ?></td>
                    <td><?php echo $movie['movieImage']; ?></td>
                    <td><?php echo $movie['movieCast']; ?></td>
                    <td><?php echo $movie['movieDirector']; ?></td>
                    <td><?php echo $movie['movieStatus']; ?></td>
                    <td>
                        <a href="updateMovie.php?movie_id=<?php echo $movie['movie_id']; ?>&movieTitle=<?php echo $movie['movieTitle']; ?>&movieSynopsis=<?php echo $movie['movieSynopsis']; ?> &movieGenre=<?php echo $movie['movieGenre']; ?>&movieLanguage=<?php echo $movie['movieLanguage']; ?>&movieDuration=<?php echo $movie['movieDuration']; ?>&mpaRating=<?php echo $movie['mpaRating']; ?>&movieImage=<?php echo $movie['movieImage']; ?>&movieCast=<?php echo $movie['movieCast']; ?>&movieDirector=<?php echo $movie['movieDirector']; ?>">Update</a> |
                        <a href="suspendMovie.php?movie_id=<?php echo $movie['movie_id']; ?>" onClick="return confirm('Are you sure you want to suspend?')">Suspend</a> |
                        <a href="activateMovie.php?movie_id=<?php echo $movie['movie_id']; ?>" onClick="return confirm('Are you sure you want to activate?')">Activate</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

	</div>

	<script>
		function logout() {
			// Code to handle logout
			console.log("Logged out");
			window.location.href = 'index.html'; // redirect to login page after logout
		}
	</script>
</body>

</html>