<?php

if (isset($_POST['userProfile_ID']) && isset($_POST['upName'])) {
    $id = $_POST['userProfile_ID'];
    $upName = $_POST['upName'];

    // checking empty fields
    if (empty($upName)) {
        if (empty($upName)) {
            echo "<font color='red'>user profile field is empty!</font><br/>";
        }
    } else {
        //updating the table
        require_once('../Controller/updateUserProfileCtl.php');
        $userCtl = new updateUserProfileCtl();
        $result = $userCtl->updateUserProfile($id, $upName);

        if ($result) {
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/userProfile.php");
        }
    }
}

//getting id from url
$id = isset($_GET['userProfile_ID']) ? $_GET['userProfile_ID'] : die('ERROR: Record ID not found.');
?>



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
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="userProfile.php">PROFILE</a>
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
                        
                        <a href='userProfile.php' class='btn btn-warning btn-round button2'>Back</a>
                        <br>
                        <div class="col-md-12">
                            <div class="panel panel-success panel-size-custom">
                                <div class="panel-heading">
                                    <h3>Update User Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="updateUserProfile.php" method="post" id="updateUserProfile">
                                        <div class="form group">
                                            <input type="hidden" class="form-control" id="userProfile_ID" name="userProfile_ID" value=<?php echo $_GET['userProfile_ID']; ?>>
                                            <label for="upName">User Profile:</label>
                                            <input type="text" class="form-control" id="upName" name="upName" value="<?php echo $_GET['upName']; ?>">
                                        </div>
                                        <br>
                                        <input type="submit" class="btn btn-success btn-round" id="submit" value="update">
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