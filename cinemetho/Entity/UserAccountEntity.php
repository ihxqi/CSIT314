<?php

include_once("../config.php");
/*session_start();*/

class UserAccount
{
    private $conn;

    public function __construct()
    {
        $db = new DB;
    }

    public function RegisterCustomerAccount($username, $email, $password, $cust_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $register = mysqli_query($conn, "INSERT INTO user (username, email, password, cust_profile) VALUES ('$username','$email','$password','$cust_profile')") or die(mysqli_error($conn));
            return $register;
        } else {
            return false;
        }
    }
    public function loginCustomerAccount($username, $password)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $stmt = $conn->prepare("SELECT user_id, user_profile, username FROM user WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($user_id, $user_profile, $username);
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->fetch();
            $user = array(
                "user_id" => $user_id,
                "user_profile" => $user_profile,
                "username" => $username
            );
            $_SESSION['login'] = true;
            $_SESSION['user_profile'] = $user['user_profile'];
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            if ($_SESSION['user_profile'] == 'Cinema Manager') {
                header('location: ../Boundary/cinemaManager.php');
            } elseif ($_SESSION['user_profile'] == 'Cinema Owner') {
                header('location: ../Boundary/fnbSalesReport.php');
            } elseif ($_SESSION['user_profile'] == 'User Admin') {
                header('location: ../Boundary/userAdmin.php');
            } elseif ($_SESSION['user_profile'] == 'Customer') {
                header('location: ../Boundary/custProfile.php');
            } else {
                return $user;
            }
        } else {
            return false;
        }
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

    /*
    public function updateAllUserProfiles($oldProfile, $newProfile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        // Update all users with the old profile to the new profile
        $updateUsers = mysqli_query($conn, "UPDATE user SET user_profile = '$newProfile' WHERE user_profile = '$oldProfile'") or die(mysqli_error($conn));

        return $updateUsers;
    }
*/
    public function updateUserProfile($userProfileID, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        $userExists = $this->checkUserExists($userProfileID);

        if ($userExists) {
            // Update the user's profile
            $stmt = $conn->prepare("UPDATE userprofile SET upName = ? WHERE userProfile_ID = ?");
            $stmt->bind_param("si", $user_profile, $userProfileID);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Profile updated successfully
                return true;
            } else {
                // Profile update failed
                return false;
            }
        } else {
            // User with the given ID does not exist
            return false;
        }
    }

    public function updateUserProfile2($user_profile, $upName)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $sql = "UPDATE userprofile SET upName = ? WHERE userProfile_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $upName, $user_profile);
        $stmt->execute();
        return $stmt->affected_rows;
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


    public function getUserAccount()
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $query = "SELECT * FROM user ORDER BY username ASC";
        $result = mysqli_query($conn, $query);
        $userAccounts = array();
        if ($result) {
            while ($res = mysqli_fetch_array($result)) {
                $userAccount = array();
                $userAccount['user_id'] = $res['user_id'];
                $userAccount['username'] = $res['username'];
                $userAccount['email'] = $res['email'];
                $userAccount['password'] = $res['password'];
                $userAccount['login_date'] = $res['login_date'];
                $userAccount['user_profile'] = $res['user_profile'];    
                $userAccount['user_status'] = $res['user_status'];
                $userAccounts[] = $userAccount;
            }
        }
        return $userAccounts;
    }

    public function addUserAccount($username, $email, $password, $userProfiles)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $addUser = mysqli_query($conn, "INSERT INTO user (username, email, password, user_profile) VALUES ('$username','$email','$password','$userProfiles')") or die(mysqli_error($conn));
            header('Location: manageUser.php');
            return $addUser;
        } else {
            return false;
        }
    }

    public function updateUserAccount($user_id, $username, $email, $password, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        $userExists = $this->checkUserExists($user_id);

        if ($userExists) {
            $pass1 = md5($password);
            $salt = "a1Bz20ydqelm8m1wql";
            $pass1 = $salt . $pass1;

            // Update the user's account details
            $stmt = $conn->prepare("UPDATE user SET username = ?, email = ?, password = ?, user_profile = ? WHERE user_id = ?");
            $stmt->bind_param("ssssi", $username, $email, $pass1, $user_profile, $user_id);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Account updated successfully
                return true;
            } else {
                // Account update failed
                return false;
            }
        } else {
            // User with the given ID does not exist
            return false;
        }
    }

    private function checkUserExists($user_id)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function suspendUserAccount($user_id): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE `user` SET `user_status` = 'Inactive' WHERE `user_id` = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->close();
    }

    public function activateUserAccount($user_id): void
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE `user` SET `user_status` = 'Active' WHERE `user_id` = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->close();
    }


    public function getUserAccountByID($user_id)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }




    /*
    public function session() {
        if(isset($_SESSION['login'])) {
            return $_SESSION['login'];
        }
    }
    */

    public function logout()
    {
        $_SESSION['login'] = false;
        session_destroy();
    }
}
