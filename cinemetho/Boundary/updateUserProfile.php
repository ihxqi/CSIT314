<?php

if(isset($_POST['user_id']) && isset($_POST['user_profile']))
{   
    $id = $_POST['user_id'];
    $upName = $_POST['user_profile'];

    // checking empty fields
    if(empty($upName)){    
        if(empty($upName)) {
            echo "<font color='red'>user profile field is empty!</font><br/>";
        }       
    } else {    
        //updating the table
        require_once('../Controller/updateUserProfileCtl.php');
        $userCtl = new updateUserProfileCtl();
        $result = $userCtl->updateUserProfile($id, $upName);

        if($result){
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/userAdmin.php");
        }
    }
}

//getting id from url
$id=isset($_GET['userProfile_ID']) ? $_GET['userProfile_ID'] : die('ERROR: Record ID not found.');
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
                      <h2>User Account Information</h2>
                      <hr color="orange">
                      <a href='manageUser.php' class='btn btn-warning btn-round'>Back</a>
                <br>
                <div class="col-md-12">
      

            <div class="panel panel-success panel-size-custom">
                <div class="panel-heading"><h3>Update User Profile</h3></div>
                  <div class="panel-body">
                    <form action="updateUserProfile.php" method="post" id="updateUserProfile">
                        <div class="form group">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['userProfile_ID'];?>>
                            <label for="user_profile">User Profile:</label>
                            <input type="text" class="form-control" id="user_profile" name="user_profile" value="<?php echo $_GET['upName'];?>">
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
</body>

</html>