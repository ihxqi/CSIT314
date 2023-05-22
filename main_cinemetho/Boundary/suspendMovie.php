<?php
include_once("../Controller/suspendMovieCtl.php");

if (isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];

    $suspendMovieCtl = new suspendMovieCtl(); 
    $suspendMovieCtl->suspendMovie($movie_id);

    header("Location: ../Boundary/manageMovies.php");
    exit();
}
?>