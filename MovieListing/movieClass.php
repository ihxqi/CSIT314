<?
require_once 'config.php';

class Movie {
    private $conn;
    
    public function __construct($host, $username, $password, $database) {
      $this->conn = new mysqli($host, $username, $password, $database);
      if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
    }
    
    public function getAllMovies() {
      $sql = "SELECT * FROM movie";
      $result = $this->conn->query($sql);
      $movies = array();
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $movies[] = $row;
        }
      }
      return $movies;
    }
    
    public function getMovieById($id) {
      $sql = "SELECT * FROM movie WHERE MovieID = $id";
      $result = $this->conn->query($sql);
      $movie = null;
      if ($result->num_rows > 0) {
        $movie = $result->fetch_assoc();
      }
      return $movie;
    }
    
    public function addMovie($title, $description, $genre, $language, $duration, $showtime, $date, $rating, $image, $action) {
      $stmt = $this->conn->prepare("INSERT INTO movie (MovieTitle, MovieDescription, MovieGenre, MovieLanguage, MovieDuration, MovieShowtime, MovieDate, MPARating, MovieImage, MovieAction) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssssssi", $title, $description, $genre, $language, $duration, $showtime, $date, $rating, $image, $action);
      $result = $stmt->execute();
      $stmt->close();
      return $result;
    }
    
    public function updateMovie($id, $title, $description, $genre, $language, $duration, $showtime, $date, $rating, $image, $action) {
      $stmt = $this->conn->prepare("UPDATE movie SET MovieTitle=?, MovieDescription=?, MovieGenre=?, MovieLanguage=?, MovieDuration=?, MovieShowtime=?, MovieDate=?, MPARating=?, MovieImage=?, MovieAction=? WHERE MovieID=?");
      $stmt->bind_param("ssssssssssi", $title, $description, $genre, $language, $duration, $showtime, $date, $rating, $image, $action, $id);
      $result = $stmt->execute();
      $stmt->close();
      return $result;
    }
    
    public function suspendMovie($movie_id) {
      // Prepare a SQL statement to update the MovieAction column of the movie record
      $stmt = $this->conn->prepare("UPDATE movie SET MovieAction = 0 WHERE MovieID = ?");
      $stmt->bind_param("i", $movie_id);
  
      // Execute the statement and check for errors
      if ($stmt->execute() === FALSE) {
        die("Error suspending movie: " . $stmt->error);
      }
      $stmt->close();
      $this->conn->close();
    }
    
    public function __destruct() {
      $this->conn->close();
    }
  }
  
  ?>
