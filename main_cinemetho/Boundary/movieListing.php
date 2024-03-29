<?php
include_once("../Controller/MovieListingCtl.php");

// Create an object of the DisplayMovierCtl class
$movieCtlObj = new DisplayMovieCtl();

// Call the DisplayMovierCtl() function to get all movies
$movies = $movieCtlObj->DisplayMovieCtl();
?>
<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie listing</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <style>
        .box {
            margin: 10px; /* Add padding around each movie */
        }
    </style>
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
                <a href="../Boundary/etickets.php">E-TICKETS</a> <!-- need to wait for the file -->
                <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                <a href="../Boundary/movieListing.php">MOVIES</a>
                </div>
            </div>
        </section>
        <hr>
        <br>
        <br>
        <section>
            <div class="container2">
                <?php
                $i = 0;
                foreach ($movies as $movie) {
                    if ($i % 3 == 0 && $i != 0) {
                       
                    }
                ?>
                    <div class="box">
                        <div class="imgBx">
                            <a href="movieDescription.php?movie_id=<?php echo $movie['movie_id']; ?>">
                                <img src="<?php echo $movie['movieImage']; ?>">
                            </a>
                        </div>
                        <div class="layer layer1"></div>

                        <a href="movieDescription.php?movie_id=<?php echo $movie['movie_id']; ?>" style="text-decoration:none">
                            <div class="contentBx">
                                <div>
                                    <h2><?php echo $movie['movieTitle']; ?><br></h2>
                                    <h2><?php echo $movie['mpaRating']; ?><br></h2>
                                    <p><?php echo $movie['movieGenre']; ?><br></p>
                                    <p><?php echo $movie['movieDuration']; ?><br></p>
                                    <p><?php echo $movie['movieLanguage']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
        </section>
    </div>
</body>

</html>
