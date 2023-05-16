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
        $query = "SELECT userProfile_ID, upName, profile_status FROM userProfile ORDER BY upName ASC";
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
    public function addUserProfile($user_profile)
    {
        if (!isset($user_profile)) {
            return false;
        }
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $checkuser = mysqli_query($conn, "SELECT userProfile_ID FROM userprofile WHERE upName='$user_profile'") or die(mysqli_error($conn));
        if ($checkuser) {
            $result = mysqli_num_rows($checkuser);
            if ($result == 0) {
                $addUserProfile = mysqli_query($conn, "INSERT INTO userprofile (upName) VALUES ('$user_profile')") or die(mysqli_error($conn));
                header('Location: userAdmin.php');
                return $addUserProfile;
            } else {
                return false;
            }
        } else {
            die(mysqli_error($conn));
        }
    }
    public function suspendUserProfile($user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE userprofile SET profile_status = 'Inactive' WHERE userProfile_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_profile);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    public function activateUserProfile($user_profile): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE userprofile SET profile_status = 'Active' WHERE userProfile_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_profile);
        $stmt->execute();
        $stmt->close();
    }

    public function updateUserProfile($userProfileID, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE userprofile SET upName = ? WHERE userProfile_ID = ?");
        $stmt->bind_param("si", $user_profile, $userProfileID);        
        $stmt->execute(); 
        return $stmt->affected_rows;
    }

    public function getOneUserProfile($userProfile_ID)
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

    public function getUserProfileByID($user_id)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("SELECT * FROM userprofile WHERE userProfile_ID = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}
