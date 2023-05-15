<?php

include_once("../config.php");
session_start();

class UserProfile
{
    private $conn;

    public function __construct()
    {
        $this->conn = new DB;
    }

    public function getUserProfiles()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT userProfile_ID, upName, profile_status FROM userprofile ORDER BY upName ASC";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }
        $userProfiles = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $userProfiles[] = $row;
        }
        mysqli_close($conn);
        return $userProfiles;
    }

    public function updateUserProfile($userProfileID, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE userprofile SET upName = ? WHERE userProfile_ID = ?");
        $stmt->bind_param("si", $user_profile, $userProfileID);        
        $stmt->execute(); 
        return $stmt->affected_rows;
    }
}
