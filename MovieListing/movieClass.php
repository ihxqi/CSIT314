<?php
class Movie {
    private $conn;

    function __construct($host, $username, $password, $database) {
        $this->conn = mysqli_connect($host, $username, $password, $database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function __destruct() {
        mysqli_close($this->conn);
    }

    function getAllMovies() {
        $query = "SELECT * FROM movie";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($this->conn));
        }
        $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $movies;
    }

    function getMovieById($MovieID) {
        $query = "SELECT * FROM movie WHERE MovieID = $MovieID";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($this->conn));
        }
        $movie = mysqli_fetch_assoc($result);
        return $movie;
    }
}
?>