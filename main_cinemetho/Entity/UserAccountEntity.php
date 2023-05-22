<?php

include_once("../config.php");
session_start();

class UserAccount
{
    private $conn;

    public function __construct()
    {
        $db = new DB;
    }

    public function RegisterCustomerAccount($username, $email, $password)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $register = mysqli_query($conn, "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')") or die(mysqli_error($conn));
            return $register;
        } else {
            return false;
        }
    }
    public function loginAccount($username, $password)
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
                header('location: ../Boundary/manageFnbReport.php');
            } elseif ($_SESSION['user_profile'] == 'User Admin') {
                header('location: ../Boundary/userProfile.php');
            } elseif ($_SESSION['user_profile'] == 'Customer') {
                header('location: ../Boundary/custProfile.php');
            } else {
                return $user;
            }
            return true;
        } else {
            return false;
        }
    }
    function updateLastLoginDate($username)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        if (!$conn) {
            echo "Database connection failed: " . mysqli_connect_error();
            return;
        }
        $sql = "UPDATE `user` SET `login_date` = CURDATE() WHERE `username` = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            echo "Prepare statement failed: " . $conn->error;
            $conn->close();
            return;
        }
        $stmt->bind_param("s", $username);
        if (!$stmt->execute()) {
            echo "Execute statement failed: " . $stmt->error;
            $stmt->close();
            $conn->close();
            return false;
        }

        $stmt->close();
        $conn->close();
        return true;
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
                $userAccount['user_status'] = $res['user_status'];
                $userAccount['user_profile'] = $res['user_profile'];
                $userAccounts[] = $userAccount;
            }
        }
        return $userAccounts;
    }

    public function addUserAccount($username, $email, $password, $user_profile)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $password = md5($password);
        $checkuser = mysqli_query($conn, "SELECT user_id FROM user WHERE email='$email'");
        $result = mysqli_num_rows($checkuser);
        if ($result == 0) {
            $addUser = mysqli_query($conn, "INSERT INTO user (username, email, password, user_profile) VALUES ('$username','$email','$password','$user_profile')") or die(mysqli_error($conn));
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

    public function updateCustUsername($user_id, $username)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = $conn->prepare("UPDATE user SET username = ? WHERE user_id = ?");
        $stmt->bind_param("si", $username, $user_id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
    function searchAccount($search)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);
        $search = mysqli_real_escape_string($conn, $search);
        $query = "SELECT * FROM user WHERE username LIKE '%$search%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $userAccounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $userAccounts;
    }

    function getBookingInfo($user_id)
    {
        $conn = mysqli_connect(HOST, USER, PASS, DB);

        // Prepare and execute the query
        $query = "SELECT booking.booking_id, movie.movieTitle, cinema.movieShowDate, fnb.comboName, booking.seatNo, combobooked.combo_id
        FROM booking
        INNER JOIN movie ON booking.movie_id = movie.movie_id
        INNER JOIN cinema ON booking.roomNo = cinema.roomNo
        INNER JOIN combobooked ON booking.booking_id = combobooked.booking_id
        INNER JOIN fnb ON combobooked.combo_id = fnb.comboID
        WHERE booking.userBooked = ?
        ORDER BY booking.booking_id DESC
        LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();

        // Fetch the results
        $result = $stmt->get_result();
        $results = $result->fetch_all(MYSQLI_ASSOC);

        // Return the results
        return $results;
    }




    public function logout()
    {
        $_SESSION['login'] = false;
        session_destroy();
    }
}
