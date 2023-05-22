<?php
include_once("../Entity/MovieEntity.php");

class updateMoviesCtl
{
    public function updateMovie($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage,$movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector)
    {
        $umc = new Movie();
        $results = $umc->updateMovie($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage,$movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector);
        return $results;
    }
}

?>