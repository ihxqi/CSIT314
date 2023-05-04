<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'cinemetho');

class DB {
    function __construct() {
        $conn = mysqli_connect(HOST, USER, PASS) or die ('Connection Error! '.mysqli_error($conn));
        mysqli_select_db($conn, DB) or die('DB Connection Error: ->'.mysqli_error($conn));
    }
}

class User {
    public function __construct(){
        $db = new DB;
    }
    
    public function register( $username, $email, $pass, $profile) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $pass = md5($pass);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $register = mysqli_query($conn, "INSERT INTO user (username, email, password, profile) VALUES ('$username','$email','$pass','$profile')") or die(mysqli_error($conn));
            return $register;
        } else {
            return false;
        }
    }
    
    public function login($username, $pass) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $pass = md5($pass);
        $check = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
        $data = mysqli_fetch_array($check);
        $result = mysqli_num_rows($check);
        if($result == 1 && $data['password'] == $pass) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $data['user_id'];
            return true;
        } else {
            return false;
        }
    }
    
    public function fullname($user_id) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$user_id'");
        $row = mysqli_fetch_array($result);
        return $row['name'];
    }
    
    public function session() {
        if(isset($_SESSION['login'])) {
            return $_SESSION['login'];
        }
    }
    
    public function logout() {
        $_SESSION['login'] = false;
        session_destroy();
    }   
}
?>
