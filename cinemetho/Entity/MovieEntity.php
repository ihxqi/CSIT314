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


    function addMovie($MovieTitle, $MovieSynopsis, $MovieGenre, $MovieLanguage, $MovieDuration, $MovieDate, $MPARating, $MovieImage, $MovieCast, $MovieDirector){
        global $connection;
        $query = "INSERT INTO movie (MovieTitle, MovieSynopsis, MovieGenre, MovieLanguage, MovieDuration, MovieDate, MPARating, MovieImage, MovieCast, MovieDirector) VALUES ('$MovieTitle', '$MovieSynopsis', '$MovieGenre', '$MovieLanguage', '$MovieDuration', '$MovieDate', '$MPARating', '$MovieImage', '$MovieCast', '$MovieDirector')";
        $exec = mysqli_query($connection, $query);
        if($exec){
          return true;
        }else{
          return false;
        }
      }

      function updateMovie($MovieID, $MovieTitle, $MovieSynopsis, $MovieGenre, $MovieLanguage, $MovieDuration, $MovieDate, $MPARating, $MovieImage, $MovieCast, $MovieDirector){
        global $connection;
        $query = "UPDATE movie SET MovieTitle='$MovieTitle', MovieSynopsis='$MovieSynopsis', MovieGenre='$MovieGenre', MovieLanguage='$MovieLanguage', MovieDuration='$MovieDuration', MovieDate='$MovieDate', MPARating='$MPARating', MovieImage='$MovieImage', MovieCast='$MovieCast', MovieDirector='$MovieDirector' WHERE MovieID='$MovieID'";
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