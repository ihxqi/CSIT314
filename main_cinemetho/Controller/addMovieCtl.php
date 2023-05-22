<?php
include_once("../Entity/MovieEntity.php");

class addMovieCtl
{
    public function addMovie($movieImage, $movieTitle, $movieGenre, $mpaRating, $movieLanguage, $movieDuration, $movieSynopsis, $movieCast, $movieDirector)
    {
        $accm = new Movie();
        $results = $accm-> addMovie($movieImage, $movieTitle, $movieGenre, $mpaRating, $movieLanguage, $movieDuration, $movieSynopsis, $movieCast, $movieDirector);
        return $results;
    }
}
?>