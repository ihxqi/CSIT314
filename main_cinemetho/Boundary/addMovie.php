<?php
include_once("../Controller/addMovieCtl.php");

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";
$e5 = "";
$e6 = "";
$e7 = "";
$e8 = "";
$e9 = "";



if (isset($_POST["addMovie"])) {

    $movieImage = $_POST["movieImage"];
    $movieTitle = $_POST["movieTitle"];
    $movieGenre = $_POST["movieGenre"];
    $mpaRating = $_POST["mpaRating"];
    $movieLanguage = $_POST["movieLanguage"];
    $movieDuration = $_POST["movieDuration"];
    $movieSynopsis = $_POST["movieSynopsis"];
    $movieCast = $_POST["movieCast"];
    $movieDirector = $_POST["movieDirector"];

    validateMovieImage($e1);
    validateMovieTitle($e2);
    validateMovieGenre($e3);
    validateMPARating($e4);
    validateMovieLanguage($e5);
    validateMovieDuration($e6);
    validateMovieSynopsis($e7);
    validateMovieCast($e8);
    validateMovieDirector($e9);

    if (empty($e1) && empty($e2) && empty($e3) && empty($e4) && empty($e5) && empty($e6) && empty($e7) && empty($e8) && empty($e9)) {
        $aMc = new addMovieCtl();
        $results = $aMc->addMovie($movieImage, $movieTitle, $movieGenre, $mpaRating, $movieLanguage, $movieDuration, $movieSynopsis, $movieCast, $movieDirector);
    }
}


function validateMovieImage(&$e1)
{
    global $movieImage;
    $movieImage = trim($_POST["movieImage"]);
    if (empty($movieImage)) {
        $e1 = "Please fill in movie image";
    }
}

function validateMovieTitle(&$e2)
{
    global $movieTitle;
    $movieTitle = trim($_POST["movieTitle"]);
    if (empty($movieTitle)) {
        $e2 = "Please fill in movie title";
    }
}

function validateMovieGenre(&$e3)
{
    global $movieGenre;
    $movieGenre = trim($_POST["movieGenre"]);
    if (empty($movieGenre)) {
        $e3 = "Please fill in movie genre";
    }
}
function validateMPARating(&$e4)
{
    global $mpaRating;
    $mpaRating = trim($_POST["mpaRating"]);
    if (empty($mpaRating)) {
        $e4 = "Please fill in movie mpa rating";
    }
}

function validateMovieLanguage(&$e5)
{
    global $movieLanguage;
    $movieLanguage = trim($_POST["movieLanguage"]);
    if (empty($movieLanguage)) {
        $e5 = "Please fill in movie language";
    }
}

function validateMovieDuration(&$e6)
{
    global $movieDuration;
    $movieDuration = trim($_POST["movieDuration"]);
    if (empty($movieDuration)) {
        $e6 = "Please fill in movie duration";
    }
}

function validateMovieSynopsis(&$e7)
{
    global $movieSynopsis;
    $movieSynopsis = trim($_POST["movieSynopsis"]);
    if (empty($movieSynopsis)) {
        $e7 = "Please fill in movie synopsis";
    }
}

function validateMovieCast(&$e8)
{
    global $movieCast;
    $movieCast = trim($_POST["movieCast"]);
    if (empty($movieCast)) {
        $e8 = "Please fill in movie cast";
    }
}

function validateMovieDirector(&$e9)
{
    global $movieDirector;
    $movieDirector = trim($_POST["movieDirector"]);
    if (empty($movieDirector)) {
        $e9 = "Please fill in movie director";
    }
}

?>

<html>

<head>
    <title>Cinema Manger - Add Movie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url("../Images/background.jpeg");
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
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="../Boundary/manageTicket.php">TICKETS</a>
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a>
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>

                </div>
            </div>
        </section>
        <hr>
        <h2>Add Movie:</h2>
        <?php
        ?>
        <form method="post" id="addMovie" class="user-input" onsubmit="return checkForm(this);" style="width:50%">

            </select>
            <br><br>
            <input type="file" name="movieImage" class="input-field" required style="width:200%; height:10%; border: 1px solid #808080;"><br><br>
            <input type="text" name="movieTitle" class="input-field" placeholder="Movie Title" required><br><br>
            <input type="text" name="movieGenre" class="input-field" placeholder="Movie Genre" required><br><br>
            <input type="text" name="mpaRating" class="input-field" placeholder="MPA Rating" required><br><br>
            <input type="text" name="movieLanguage" class="input-field" placeholder="Movie Language" required><br><br>
            <input type="int" name="movieDuration" class="input-field" placeholder="Movie Duration" required><br><br>
            <input type="text" name="movieSynopsis" class="input-field" placeholder="Movie Synopsis" required><br><br>
            <input type="text" name="movieCast" class="input-field" placeholder="Movie Cast" required><br><br>
            <input type="text" name="movieDirector" class="input-field" placeholder="Movie Director" required><br><br>

            <input type="submit" name="addMovie" class="submit-btn button3" value="Add Movie">
        </form>
    </div>
    </div>
    </div>

</html>
<script>
    var y = document.getElementById("addMovie");
    var z = document.getElementById("btn");

    function addMovie() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    window.onload = function() {
        var alertDiv = document.getElementById('alert-message');
        var alertMessage = alertMessage || '';
        if (alertMessage.length > 0) {
            alertDiv.innerHTML = '<p>' + alertMessage + '</p>';
        }
    };

    function addMovieSuccess() {
        alert("You have successfully added!")
    }

    function clearForm() {
        document.getElementById("addMovie").reset();
    }
</script>
</body>