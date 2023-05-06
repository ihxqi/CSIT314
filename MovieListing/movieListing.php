<?php
require_once 'movieClass.php';

// Create an object of the Movie class
$movieObj = new Movie($host, $username, $password, $database);

// Call the getAllMovies() function to get all movies
$movies = $movieObj->getAllMovies();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie listing</title>
        <link rel ="stylesheet" href = "styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    </head>
</html>

<body>
    <div class="white-box">
        <section>
        <div class="container2">
                    <?php
                    // Loop through the movies array and display the movie information
                    foreach ($movies as $movie) {
                        ?>
                        <div class="box">
                            <div class="imgBx">
                                <a href="<?php echo $movie['MovieLink']; ?>"><img src="<?php echo $movie['MovieImage']; ?>"></a> 
                            </div>
                            <div class="layer layer1"></div>
                            <a href="<?php echo $movie['MovieLink']; ?>">
                                <div class="contentBx">
                                    <div>
                                        <h2><?php echo $movie['MovieTitle']; ?><br></h2>
                                        <h2><?php echo $movie['MPARating']; ?><br></h2>
                                        <p><?php echo $movie['MovieGenre']; ?><br></p>
                                        <p><?php echo $movie['MovieDescription']; ?><br></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
        </section>

    </div>
</body>