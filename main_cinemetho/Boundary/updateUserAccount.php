<?php
// including the database connection file
include("../config.php");
include_once("../Controller/getUserAccountByIDCtl.php");

if (isset($_POST['update'])) {
    $id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_profile = $_POST['user_profile'];

    // checking empty fields
    if (empty($username) || empty($password) || empty($email)) {
        if (empty($username)) {
            echo "<font color='red'>username field is empty!</font><br/>";
        }
        if (empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }
    } else {
        //updating the table
        require_once('../Controller/updateUserAccountCtl.php');
        $userCtl = new updateUserAccountCtl();
        $result = $userCtl->updateUserAccount($id, $username, $email, $password, $user_profile);

        if ($result) {
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/manageUser.php");
        }
    }
}
?>

<?php
//getting id from url
$id = isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$username = isset($_GET['username']) ? $_GET['username'] : die('ERROR: Record username not found.');
$password = isset($_GET['password']) ? $_GET['password'] : die('ERROR: Record password not found.');
$email = isset($_GET['email']) ? $_GET['email'] : die('ERROR: Record email not found.');
$user_profile = isset($_GET['user_profile']) ? $_GET['user_profile'] : die('ERROR: Record user_profile not found.');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Admin - Update User Account </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("../Images/background.jpeg");
        }
    </style>
</head>

<body class="index-page sidebar-collapse">
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
                <div class="topnav">
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="userProfile.php">PROFILE</a>
                    <a href="manageUser.php">USER</a>
                </div>
            </div>
        </section>
        <hr>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <h2>User Account Information</h2>
                    <hr color="orange">
                    <a href='manageUser.php' class='btn btn-warning btn-round'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update User</h3>
                            </div>
                            <div class="panel-body">
                                <form action="updateUserAccount.php" method="post">
                                    <div class="form group">
                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['user_id']; ?>>
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
                                        <br><br>
                                        <label for="password">Password: </label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                                        <br><br>
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                        <br><br>
                                        <label for="user_profile">User Profile:</label>
                                        <input type="text" class="form-control" id="user_profile" name="user_profile" value="<?php echo $user_profile; ?>">
                                    </div>
                                    <br>
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                                            <i class="now-ui-icons ui-1_check"></i> Update Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>