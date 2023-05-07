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
    
    public function register( $username, $email, $pass, $cust_profile) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $pass = md5($pass);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $register = mysqli_query($conn, "INSERT INTO user (username, email, password, cust_profile) VALUES ('$username','$email','$pass','$cust_profile')") or die(mysqli_error($conn));
            return $register;
        } else {
            return false;
        }
    }
    public function login($username, $password) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $stmt = $conn->prepare("SELECT user_id, user_profile, username FROM user WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($user_id, $user_profile, $username);
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $stmt->fetch();
            $user = array(
                "user_id" => $user_id,
                "user_profile" => $user_profile,
                "username" => $username
            );
            $_SESSION['login'] = true;
            $_SESSION['user_profile'] = $user['user_profile'];
            $_SESSION['user_id'] = $user['user_id'];
            return $user;
        } else {
            return false;
        }
    }
    
    
    public function fullname($username) {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
        $row = mysqli_fetch_array($result);
        return $row['name'];
    }
    
    /*
    public function session() {
        if(isset($_SESSION['login'])) {
            return $_SESSION['login'];
        }
    }
    */
    
    public function logout() {
        $_SESSION['login'] = false;
        session_destroy();
    }   
}
?>
