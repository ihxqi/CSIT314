<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cinemetho";

class DBb
{
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect(HOST, USER, PASS, DB);
        if (!$this->conn) {
            die("Connection Error: " . mysqli_connect_error());
        }
    }
}

class UserAccount1
{
    private $conn;

    public function __construct()
    {
        $db = new DBb;
    }

    public function ViewUserProfile()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        $query = "SELECT upName FROM useprofile_id";
        $result = mysqli_query($conn, $query);

        $userProfiles = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $userProfiles[] = $row['upName'];
        }

        return $userProfiles;
    }

    public function addUserProfile1($username, $email, $password, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
    
        // Get the userProfile_ID based on the upName
        $getProfileID = mysqli_query($conn, "SELECT user_profile FROM userprofile WHERE upName = '$user_profile'");
        $result = mysqli_fetch_assoc($getProfileID);
        $userProfileID = $result['user_profile'];
    
        // Insert the user into the user table
        $addUser = mysqli_query($conn, "INSERT INTO user (username, email, password, user_profile) VALUES ('$username', '$email', '$password', $userProfileID)") or die(mysqli_error($conn));
    
        return $addUser;
    }
}
