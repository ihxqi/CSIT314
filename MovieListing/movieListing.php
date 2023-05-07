<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'\cinemetho\config.php');
include 'movieClass.php';

// Create an object of the Movie class
$movieObj = new Movie('localhost', 'root', '', 'cinemetho');

// Call the getAllMovies() function to get all movies
$movies = $movieObj->getAllMovies();
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
                        <img src="../image/cinemethologo.jpeg">
                    </div>

                    <div class="topnav">
                        <a href="custProfile.html">PROFILE</a>
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
                <div class="container2">
                    <?php 
                    $i = 0;
                    foreach ($movies as $movie) { 
                        if ($i % 3 == 0) { // start a new section after every third movie
                            echo '</div></section><section><div class="container2">';
                        }
                    ?>
                    <div class="box">
                        <div class="imgBx">
                            <a href="movieDetails.php?id=<?php echo $movie['MovieID']; ?>"><img src="<?php echo $movie['MovieImage']; ?>"></a> 
                        </div>
                        <div class="layer layer1"></div>
                        <div class="contentBx">
                        <a href="movieDetails.php?id=<?php echo $movie['MovieID']; ?>"></a> 
                            <div>
                                <h2><?php echo $movie['MovieTitle']; ?><br></h2>
                                <h2><?php echo $movie['MPARating']; ?><br></h2>
                                <p><?php echo $movie['MovieGenre']; ?><br></p>
                        <p><?php echo $movie['MovieDuration']; ?><br></p>
                        <p><?php echo $movie['MovieLanguage']; ?></p>
                    </div>
                </div>
            </div>
            <?php 
            $i++;
           
        } 
        ?>
            </section>

        </div>
    </body>
</html>