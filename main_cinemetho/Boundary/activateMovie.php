<?php
include_once("../Controller/activateMovieCtl.php");

if (isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];

    $movieCtl = new activateMovieCtl();
    $movieCtl->activateMovie($movie_id);

    header("Location: ../Boundary/manageMovies.php");
    exit();
}
?>