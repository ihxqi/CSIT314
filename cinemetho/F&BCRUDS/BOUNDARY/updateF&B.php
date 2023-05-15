<?php
include("../config.php");
include_once("../Controller/getF&BCtl.php");
include_once("../Controller/updateF&BCtl.php"); //not sure if this is needed 

if(isset($_POST['update']))
{   
    $comboId = $_POST['combo_id'];
    $comboName = $_POST['combo_name'];
    $comboDesc = $_POST['combo_description'];
    $comboPrice = $_POST['combo_price']; 
    $comboQuantity = $_POST['combo_quantity']; 
    

    // checking empty fields
    if(empty($combo_id) || empty($combo_name) || empty($combo_description) || empty($combo_price) || empty($combo_quantity)) {    
        if(empty($combo_id)) {
            echo "<font color='red'>Combo id is empty!</font><br/>";
        }
        if(empty($combo_name)) {
            echo "<font color='red'>Combo name is empty!</font><br/>";
        }
        if(empty($combo_description)) {
            echo "<font color='red'>Combo description field is empty!</font><br/>";
        }
        if(empty($combo_price)) {
            echo "<font color='red'>Combo price field is empty!</font><br/>";
        }
        if(empty($combo_quantity)) {
            echo "<font color='red'>Combo quantity field is empty!</font><br/>";
        }

    } else {    
        //updating the table
        require_once('../Controller/updateFnBCtl.php');
        $ufnb = new updateFnBCtl();
        $result = $ufnb->updateFnB($comboId, $comboName, $comboDesc, $comboPrice, $comboQuantity);

        if($result){
            header("Location: ../Boundary/manageF&B.php"); //not sure if its the correct page to redirect to
        }
    }
}
?>

<?php
//getting id from url
$comboId=isset($_GET['combo_id']) ? $_GET['combo_id'] : die('ERROR: Combo not found.');
//selecting data associated with this particular id
$fnb = new FnB();
$fnbData = $fnb->getFnB($comboId);

if(!$fnbData) { 
    die('ERROR: Combo not found.');
}

$comboId = $fnbData['combo_id'];
$comboName = $fnbData['combo_name'];
$comboDesc = $fnbData['combo_description'];
$comboPrice = $fnbData['combo_price']; 
$comboQuantity = $fnbData['combo_quantity']; 

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
                    <form action="updateF&b.php" method="post">
                        <div class="form group">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['user_id'];?>>
                            <label for="combo_id">Combo Id:</label>
                            <input type="text" class="form-control" id="combo_id" name="combo_id" value="<?php echo $comboId;?>">
                            <br><br>
                            <label for="combo_name">Combo name:</label>
                            <input type="text" class="form-control" id="combo_name" name="combo_name" value="<?php echo $comboName;?>">
                            <br><br>
                            <label for="combo_description">Combo description: </label>
                            <input type="text" class="form-control" id="combo_description" name="combo_description" value="<?php echo $comboDesc;?>">
                            <br><br>
                            <label for="combo_price">Combo price:</label>
                            <input type="int" class="form-control" id="combo_price" name="combo_price" value="<?php echo $comboPrice;?>">
                            <br><br>
                            <label for="combo_quantity">Combo quantity:</label>
                            <input type="int" class="form-control" id="combo_quantity" name="combo_quantity" value="<?php echo $comboQuantity;?>">
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