<?php
include_once("../Controller/updateCustUsernameCtl.php");

if (isset($_POST['update'])) {
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    // checking empty fields
    if (empty($user_id) || empty($username)) {
        // Error handling code
    } else {
        // Updating the table
        $uCU = new updateCustUsernameCtl();
        $result = $uCU->updateCustUsername($user_id, $username);

        if ($result) {
            $_SESSION['username'] = $username;
            header("Location: ../Boundary/custProfile.php");
            exit();
        }
    }
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>

<body class="index-page sidebar-collapse">

    <!-- End Navbar -->
    <div class="wrapper">

        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <h2>Profile Information</h2>
                    <hr color="orange">
                    <a href='custProfile.php' class='btn btn-warning btn-round'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update Username</h3>
                            </div>
                            <div class="panel-body">
                                <form action="custUpdate.php" method="post">
                                    <div class="form group">
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
                                        <br><br>
                                        <label for="ticket_price">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
                                        <br><br>
                                       
                                    </div>
                                    <br>
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                                            <i class="now-ui-icons ui-1_check"></i> Update Profile
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