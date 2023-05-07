<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'\cinemetho\config.php');
include 'movieClass.php';

// Get the ID of the movie from the URL
if(isset($_GET['id'])) {
    $MovieID = $_GET['id'];
} else {
    header("Location: movieListing.php");
    exit;
}

// Create an object of the Movie class
$movieObj = new Movie('localhost', 'root', '', 'cinemetho');
$movie = $movieObj->getMovieById($MovieID);

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie listing</title>
        <link rel ="stylesheet" href = "../styles.css">
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
                        <a href="../UserProfile/custProfile.php">PROFILE</a>
                        <a href="custHistory.html">PUCHASED TICKETS</a>
                        <a href="booking.html">BUY TICKETS</a>
                        <a href="#cinemas location">CINEMAS</a>
                        <a href="movielisting.php">MOVIES</a>
                    </div>
                </div> 
            </section>

            <hr>
            <br><br>

            <section>
                <div class="container">
                    <div class="image">
                        <img src="<?php echo $movie['MovieImage']; ?>">
                    </div>
                    <div class="movietext">
                        <h1><?php echo $movie['MovieTitle']; ?> (<?php echo $movie['MPARating']; ?>)</h1>

                        <hr>
                        <button class="button">SHOWTIMES</button>
                        <hr>

                        <br>
                        <h3>CAST</h3>
                        <p><?php echo $movie['MovieCast']; ?></p>

                        <br>
                        <h3>DIRECTOR</h3>
                        <p><?php echo $movie['MovieDirector']; ?></p>

                        <br>
                        <h3>SYNOPSIS</h3>
                        <p><?php echo $movie['MovieDescription']; ?><p>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
