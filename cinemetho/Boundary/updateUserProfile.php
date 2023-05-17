<?php
// including the database connection file
include_once("../Controller/getOneUserProfileCtl.php");

//getting id from url
$id=isset($_GET['userProfile_ID']) ? $_GET['userProfile_ID'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$getOneUserProfile = new getOneUserProfileCtl($id);

?>



<!DOCTYPE html>
<html lang="en">

<head>
<title>User Admin - Update User Profile </title>
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
                    <a href="index.php" onclick="logout()">LOG OUT</a>
                    <a href="userAdmin.php">PROFILE</a>
                    <a href="manageUser.php">USER</a>
                </div>
            </div>
        </section>
        <hr>
        <!-- End Navbar -->
        
            <br>
            <div class="main">
                <div class="section section-basic">
                    <div class="container">
                        
                        <a href='userAdmin.php' class='btn btn-warning btn-round button2'>Back</a>
                        <br>
                        <div class="col-md-12">
                            <div class="panel panel-success panel-size-custom">
                                <div class="panel-heading">
                                    <h3>Update User Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="updateUserProfileByID.php" method="post" id="updateUserProfile">
                                        <div class="form group">
                                            <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['userProfile_ID'];?>>
                                            <label for="user_profile">User Profile:</label>
                                            <input type="text" class="form-control" id="user_profile" name="user_profile" value="
																	<?php echo $_GET['upName'];?>">
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-success btn-round button4" id="submit" value="Update">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    </div>
</body>

</html>