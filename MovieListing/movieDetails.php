<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'\cinemetho\config.php');
include 'movieClass.php';

// Create an object of the Movie class
$movie = $movieObj->getMovieById($MovieID); // where $id is the ID of the movie you want to retrieve

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie description</title>
        <link rel ="stylesheet" href = "styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    </head>
</html>

<body>
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="image/cinemethologo.jpeg">
                </div>
    
                <div class="topnav">
                    <a href="custProfile.html">PROFILE</a>
                    <a href="custHistory.html">PUCHASED TICKETS</a>
                    <a href="booking.html">BUY TICKETS</a>
                    <a href="#cinemas location">CINEMAS</a>
                    <a href="movielisting.html">MOVIES</a>
                </div>
            </div> 
        </section>
        
    
        <!--<br><br>
    
        <section>
            <div class="selections">
                <form id="details">
                    <select name="movieselection" id="movieselection">
                        <option value="none" selected disabled hidden>Select movie</option>
                        <option value="movie1">John Wick: Chapter 4 M18</option>
                        <option value="movie2">Air NC16</option>
                        <option value="movie3">Dungeons & Dragons PG13</option>
                        <option value="movie4">Geylang M18</option>
                      </select>
        
                      <select name="cinemaselection" id="cinemaselection">
                        <option value="none" selected disabled hidden>Select cinema</option>
                        <option value="cinema1">Yishun</option>
                        <option value="cinema2">Clementi</option>
                        <option value="cinema3">Tengah</option>
                        <option value="cinema4">Vivocity</option>
                      </select>
                      
                      <select name="day" id="day">
                        <option value="none" selected disabled hidden>Select date</option>
                        <option value="day1">Today 18 Apr</option>
                        <option value="day2">19 Apr</option>
                        <option value="day3">20 Apr</option>
                        <option value="day4">21 Apr</option>
                      </select>
        
                      <input type="submit" value="Book now">
                </form>
        
            </div>
        </section> -->
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
