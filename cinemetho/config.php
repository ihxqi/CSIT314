<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cinemetho";

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'cinemetho');


class DB {
  public $conn;

  function __construct() {
      $this->conn = mysqli_connect(HOST, USER, PASS, DB);
      if (!$this->conn) {
          die("Connection Error: " . mysqli_connect_error());
      }
  }
}
?>