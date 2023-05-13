<?php
// including the database connection file
include("../config.php");
include_once("../Controller/getUserAccountByIDCtl.php"); //to change this pathing

if(isset($_POST['update']))
{   
    $id = $_POST['combo_id'];
    $combo_name = $_POST['combo_name'];
    $combo_description = $_POST['combo_description'];
    $combo_price = $_POST['combo_price']; 
    $combo_quantity = $_POST['combo_quantity']; 
    

    // checking empty fields
    if(empty($combo_name) || empty($combo_description) || empty($combo_price) || empty($combo_quantity)) {    
        if(empty($combo_name)) {
            echo "<font color='red'>username field is empty!</font><br/>";
        }
        if(empty($combo_description)) {
            echo "<font color='red'>Lastname field is empty!</font><br/>";
        }
        if(empty($combo_price)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }
        if(empty($combo_quantity)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

    } else {    
        //updating the table
        require_once('../Controller/updateUserAccountCtl.php'); //change this pathing
        $userCtl = new updateUserAccountCtl();//change this pathing
        $result = $userCtl->updatef&b($id, $combo_name, $combo_description, $combo_price, $combo_quantity);//change this pathing

        if($result){
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/f&b.php"); //change this pathing
        }
    }
}
?>

<?php
//getting id from url
$id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$userAccount = new UserAccount(); // need to change 
$userAccountData = $userAccount->getUserAccountByID($id); // need to change 

if(!$userAccountData) { // need to change 
    die('ERROR: Record not found.');
}

$combo_name = $userAccountData['combo_name']; // need to change 
$combo_description = $userAccountData['combo_description']; // need to change 
$combo_price = $userAccountData['combo_price']; // need to change 
$combo_quantity = $userAccountData['combo_quantity']; // need to change 


// need to change all the pathing and feidls here with the appropriate controller 
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
                      <h2>Food Combo Information</h2>
                      <hr color="orange">
                      <a href='f&b.php' class='btn btn-warning btn-round'>Back</a> 
                <br>
                <div class="col-md-12">
      

            <div class="panel panel-success panel-size-custom">
                <div class="panel-heading"><h3>Update User</h3></div>
                  <div class="panel-body">
                    <form action="updatef&b.php" method="post">
                        <div class="form group">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['user_id'];?>>
                            <label for="combo_name">Combo name:</label>
                            <input type="text" class="form-control" id="combo_name" name="combo_name" value="<?php echo $combo_name;?>">
                            <br><br>
                            <label for="combo_description">Combo description: </label>
                            <input type="text" class="form-control" id="combo_description" name="combo_description" value="<?php echo $combo_description;?>">
                            <br><br>
                            <label for="combo_price">Combo price:</label>
                            <input type="int" class="form-control" id="combo_price" name="combo_price" value="<?php echo $combo_price;?>">
                            <br><br>
                            <label for="combo_quantity">Combo quantity:</label>
                            <input type="int" class="form-control" id="combo_quantity" name="combo_quantity" value="<?php echo $combo_quantity;?>">
                        </div>
                        <br>
                        <div class="form group">
                            <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                            <i class="now-ui-icons ui-1_check"></i> Update Food
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