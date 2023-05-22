<?php
include_once("../Controller/updateMovieCtl.php");

if (isset($_POST['update'])) {
    $movie_id = $_POST['movie_id'];
    $movieTitle = $_POST['movieTitle'];
    $movieSynopsis = $_POST['movieSynopsis'];
    $movieGenre = $_POST['movieGenre'];
    $movieLanguage = $_POST['movieLanguage'];
    $movieDuration = $_POST['movieDuration'];
    $mpaRating = $_POST['mpaRating'];
    $movieImage = $_POST['movieImage'];
    $movieCast = $_POST['movieCast'];
    $movieDirector = $_POST['movieDirector'];


    // checking empty fields
    if (empty($movie_id) || empty($movieTitle) || empty($movieSynopsis) || empty($movieGenre) || empty($movieLanguage)|| empty($movieDuration)|| empty($mpaRating)|| empty($movieImage)|| empty($movieCast)|| empty($movieDirector)) {
        // Error handling code
    } else {
        // Updating the table
        $utic = new updateMoviesCtl();
        $result = $utic->updateMovie($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage,$movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector);

        if ($result) {
            header("Location: ../Boundary/manageMovies.php");
            exit();
        }
    }
}

$movie_id = isset($_GET['movie_id']) ? $_GET['movie_id'] : die('ERROR: ID not found.');
$movieTitle = isset($_GET['movieTitle']) ? $_GET['movieTitle'] : die('ERROR: Title not found.');
$movieSynopsis = isset($_GET['movieSynopsis']) ? $_GET['movieSynopsis'] : die('ERROR: Synopsis not found.');
$movieGenre = isset($_GET['movieGenre']) ? $_GET['movieGenre'] : die('ERROR: Genre not found.');
$movieLanguage = isset($_GET['movieLanguage']) ? $_GET['movieLanguage'] : die('ERROR: movieLanguage not found.');
$movieDuration = isset($_GET['movieDuration']) ? $_GET['movieDuration'] : die('ERROR: movieDuration not found.');
$mpaRating = isset($_GET['mpaRating']) ? $_GET['mpaRating'] : die('ERROR: mpaRating not found.');
$movieImage = isset($_GET['movieImage']) ? $_GET['movieImage'] : die('ERROR: movieImage not found.');
$movieCast = isset($_GET['movieCast']) ? $_GET['movieCast'] : die('ERROR: movieCast not found.');
$movieDirector = isset($_GET['movieDirector']) ? $_GET['movieDirector'] : die('ERROR: movieDirector not found.');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cinema Manager - Update Movie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("../Images/background.jpeg");
        }
    </style>
</head>

<body class="index-page sidebar-collapse">
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
                <div class="topnav">
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>
                </div>
            </div>
        </section>
        <hr>
        <br><br>
        <div class="wrapper">
            <br>
            <div class="main">
                <div class="section section-basic">
                    <div class="container">
                        <h2>Movie Information</h2>
                        <hr color="orange">
                        <a href='manageMovies.php' class='btn btn-warning btn-round'>Back</a>
                        <br>
                        <div class="col-md-12">
                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading" style="text-align: left;">
                                <h3>Update Ticket:</h3>
                            </div>
                            <div class="panel-body" style="text-align: left;">
                                <form action="updateMovie.php" method="post">
                                    <div class="form group">
                                    <input type="hidden" class="form-control" id="movie_id" name="movie_id" value="<?php echo $movie_id; ?>">
                                       
                                        <label for="movieTitle">Movie Title:</label>
                                        <input type="text" class="form-control" id="movieTitle" name="movieTitle" value="<?php echo $movieTitle; ?>">
                                        <br><br>
                                        <label for="movieSynopsis">Movie Synopsis: </label>
                                        <input type="text" class="form-control" id="movieSynopsis" name="movieSynopsis" value="<?php echo $movieSynopsis; ?>">
                                        <br><br>
                                        <label for="movieGenre">Movie Genre: </label>
                                        <input type="text" class="form-control" id="movieGenre" name="movieGenre" value="<?php echo $movieGenre; ?>">
                                        <br><br>
                                        <label for="movieLanguage">Movie Language: </label>
                                        <input type="text" class="form-control" id="movieLanguage" name="movieLanguage" value="<?php echo $movieLanguage; ?>">
                                        <br><br>
                                        <label for="movieDuration">Movie Duration: </label>
                                        <input type="text" class="form-control" id="movieDuration" name="movieDuration" value="<?php echo $movieDuration; ?>">
                                        <br><br>
                                        <label for="mpaRating">MPA Rating: </label>
                                        <input type="text" class="form-control" id="mpaRating" name="mpaRating" value="<?php echo $mpaRating; ?>">
                                        <br><br>
                                        <label for="movieImage">Movie Image: </label>
                                        <input type="text" class="form-control" id="movieImage" name="movieImage" value="<?php echo $movieImage; ?>">
                                        <br><br>
                                        <label for="movieCast">Movie Cast: </label>
                                        <input type="text" class="form-control" id="movieCast" name="movieCast" value="<?php echo $movieCast; ?>">
                                        <br><br>
                                        <label for="movieDirector">Movie Director: </label>
                                        <input type="text" class="form-control" id="movieDirector" name="movieDirector" value="<?php echo $movieDirector; ?>">
                                        <br><br>
                                    </div>
                                  
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round button4" id="submit" name="update">
                                            <i class="now-ui-icons ui-1_check"></i> Update Ticket
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>