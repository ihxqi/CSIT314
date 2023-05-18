<?php
include_once("../Controller/MovieDescriptionCtl.php");

if(isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];
} else {
    header("Location: movieListing.php");
    exit;
}

// Create an object of the DisplayMovierCtl class
$movieCtlObj = new DisplayMovieByIdCtl($movie_id);

// Call the DisplayMovierCtl() function to get the movie with the specified ID
$movie = $movieCtlObj->DisplayMovieByIdCtl($movie_id);
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
                        <a href="../Boundary/index.php" onclick="logout()">LOG OUT</a>
                        <a href="../Boundary/custProfile.php">PROFILE</a>
                        <a href="../Boundary/custHistory">PUCHASED TICKETS</a>
                        <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                        <a href="../Boundary/movieListing.php">MOVIES</a>
                    </div>
                </div> 
            </section>

            <hr>
            <br><br>

            <section>
                <div class="container">
                    <div class="image">
                        <img src="<?php echo $movie['movieImage']; ?>">
                    </div>
                    <div class="movietext">
                        <h1><?php echo $movie['movieTitle']; ?> (<?php echo $movie['mpaRating']; ?>)</h1>

                        <hr>
                        <button class="button" onclick="redirectToBuyTicket()">BUY TICKETS</button>
                        <hr>

                        <br>
                        <h3>CAST</h3>
                        <p><?php echo $movie['movieCast']; ?></p>

                        <br>
                        <h3>DIRECTOR</h3>
                        <p><?php echo $movie['movieDirector']; ?></p>

                        <br>
                        <h3>SYNOPSIS</h3>
                        <p><?php echo $movie['movieSynopsis']; ?><p>
                    </div>
                </div>
            </section>
        </div>
        <script>
            function redirectToBuyTicket() {
                    window.location.href = "../Boundary/userBooking.php"; // Replace with your desired URL
                }
        </script>
    </body>
</html>
