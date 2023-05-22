<?php
include_once("../Entity/MovieEntity.php");

class updateMoviesCtl
{
    public function updateMovies($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage, $movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector)
    {
        $umc = new Movie();
        $results = $umc->updateMovies($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage, $movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector);
        return $results;
    }
}

?>