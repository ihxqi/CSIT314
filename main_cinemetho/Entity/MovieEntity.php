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
        $query = "SELECT * FROM movie WHERE movieStatus = 'Active'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $movies;
    }
    
    function DisplayMovieById($movie_id) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM movie WHERE movie_id = $movie_id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        if(isset($_GET['movie_id'])) {
            $movie_id = $_GET['movie_id'];
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
        $query = "SELECT * FROM movie";
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



    function addMovie($movieImage, $movieTitle, $movieGenre, $mpaRating, $movieLanguage, $movieDuration, $movieSynopsis, $movieCast, $movieDirector)
    {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
  
      $query = "INSERT INTO movie (movieImage, movieTitle, movieGenre, mpaRating, movieLanguage, movieDuration, movieSynopsis, movieCast, movieDirector) VALUES ('$movieImage', '$movieTitle', '$movieGenre', '$mpaRating', '$movieLanguage', '$movieDuration', '$movieSynopsis', '$movieCast', '$movieDirector')";
      $result = mysqli_query($conn, $query);
      mysqli_close($conn);
      header('Location: manageMovies.php');
  
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
    public function updateMovie($movie_id, $movieTitle, $movieSynopsis, $movieGenre, $movieLanguage,$movieDuration, $mpaRating, $movieImage, $movieCast, $movieDirector)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE movie SET movieTitle = ?, movieSynopsis = ?, movieGenre = ? , movieLanguage =?, movieDuration=? ,mpaRating=?, movieImage=?, movieCast=?, movieDirector=? WHERE movie_id = ?");
        $stmt->bind_param("sssssssssi", $movieTitle, $movieSynopsis,  $movieGenre, $movieLanguage,$movieDuration, $mpaRating, $movieImage,$movieCast,$movieDirector, $movie_id );
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function suspendMovie($movie_id)
    {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $sql = "UPDATE movie SET movieStatus = 'Inactive' WHERE movie_id = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $movie_id);
      $stmt->execute();
      return $stmt->affected_rows;
    }
  
    public function activateMovie($movie_id): void
    {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $stmt = $conn->prepare("UPDATE movie SET movieStatus = 'Active' WHERE movie_id = ?");
      $stmt->bind_param("i", $movie_id);
      $stmt->execute();
      $stmt->close();
    }

    function searchMovie($search)
    {
      $conn = mysqli_connect(HOST, USER, PASS, DB);
      $search = mysqli_real_escape_string($conn, $search);
      $query = "SELECT * FROM movie WHERE movieTitle LIKE '%$search%'";
      $result = mysqli_query($conn, $query);
  
      if (!$result) {
          die("Query failed: " . mysqli_error($conn));
      }
  
      $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_close($conn);
      return $movies;
    }

    
}
?>