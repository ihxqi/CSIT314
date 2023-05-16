<?php
// including the database connection file
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
?>