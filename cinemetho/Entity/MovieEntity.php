<?php
include_once("../config.php");
class Movie {
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
    }

    public function __destruct() {
        mysqli_close($this->conn);
    }

    function DisplayMovie() {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM movie";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $movies;
    }
    
    function DisplayMovieById($MovieID) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM movie WHERE MovieID = $MovieID";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        if(isset($_GET['MovieID'])) {
            $MovieID = $_GET['MovieID'];
        } else {
            header("Location: movieListing.php");
            exit;
        }
        $movie = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $movie;
    }

    function getMovie()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM movie ORDER BY movieTitle ASC";
        $result = mysqli_query($conn, $query);
        $movies = array(); 
        if ($result) {
            while ($res = mysqli_fetch_array($result)) {
                $movie = array(); 
                $movie['movie_id'] = $res['movie_id'];
                $movie['movieTitle'] = $res['movieTitle'];
                $movie['movieSynopsis'] = $res['movieSynopsis'];
                $movie['movieGenre'] = $res['movieGenre'];
                $movie['movieLanguage'] = $res['movieLanguage'];
                $movie['movieDuration'] = $res['movieDuration'];
                $movie['mpaRating'] = $res['mpaRating'];
                $movie['movieImage'] = $res['movieImage'];
                $movie['movieCast'] = $res['movieCast'];
                $movie['movieDirector'] = $res['movieDirector'];
                $movie['movieStatus'] = $res['movieStatus'];

                $movies[] = $movie; 
            }
        }
        return $movies;
    }


    function addMovie($movieTitle, $movieSynopsis, $movieGenre, $movieLanguage, $movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector){
        global $connection;
        $query = "INSERT INTO movie (movieTitle, movieSynopsis, movieGenre, movieLanguage, movieDuration, mpaRating, movieImage, movieCast, movieDirector) VALUES ($movieTitle, $movieSynopsis, $movieGenre, $movieLanguage, $movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector)";
        $exec = mysqli_query($connection, $query);
        if($exec){
          return true;
        }else{
          return false;
        }
      }

      function updateMovie($movie_id,$movieTitle, $movieSynopsis, $movieGenre, $movieLanguage, $movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector){
        global $connection;
        $query = "UPDATE movie SET movieTitle='$movieTitle', movieSynopsis='$movieSynopsis', movieGenre='$movieGenre', movieLanguage='$movieLanguage', movieDuration='$movieDuration', mpaRating='$mpaRating', movieImage='$movieImage', movieCast='$movieCast', movieDirector='$movieDirector' WHERE movie_id='$movie_id'";
        $exec = mysqli_query($connection, $query);
        if($exec){
          return true;
        }else{
          return false;
        }
      }

          //Please do activate yourself//Please do activate yourself//Please do activate yourself
    //Please do activate yourself//Please do activate yourself//Please do activate yourself
    //Please do activate yourself//Please do activate yourself//Please do activate yourself
    //Please do activate yourself//Please do activate yourself//Please do activate yourself



    
}
?>