<?php
include("../config.php");
include_once("../Controller/getFnBCtl.php");
include_once("../Controller/updateFnBCtl.php");

if (isset($_POST['update'])) {
    $comboID = $_POST['comboID'];
    $comboName = $_POST['comboName'];
    $comboImg = $_POST['comboImg'];
    $comboPrice = $_POST['comboPrice'];
    $comboQuantity = $_POST['comboQuantity'];

    // checking empty fields
    if (empty($comboID) || empty($comboName) || empty($comboImg) || empty($comboPrice) || empty($comboQuantity)) {
        // Error handling code
    } else {
        // Updating the table
        $ufnb = new updateFnBCtl();
        $result = $ufnb->updateFnB($comboID, $comboName, $comboImg, $comboPrice, $comboQuantity);

        if ($result) {
            header("Location: ../Boundary/manageFnB.php");
            exit();
        }
    }
}
$comboId = isset($_GET['comboID']) ? $_GET['comboID'] : die('ERROR: Combo not found.');
$comboName = isset($_GET['comboName']) ? $_GET['comboName'] : die('ERROR: Combo name not found.');
$comboImg = isset($_GET['comboImg']) ? $_GET['comboImg'] : die('ERROR: Combo image not found.');
$comboPrice = isset($_GET['comboPrice']) ? $_GET['comboPrice'] : die('ERROR: Combo price not found.');
$comboQuantity = isset($_GET['comboQuantity']) ? $_GET['comboQuantity'] : die('ERROR: Combo quantity not found.');

// Selecting data associated with this particular id
$fnb = new FnB();
$fnbData = $fnb->getFnB($comboId); 

if (!$fnbData) {
    die('ERROR: Combo not found.');
}

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
                    <a href='manageFnB.php' class='btn btn-warning btn-round'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update Food</h3>
                            </div>
                            <div class="panel-body">
                                <form action="updateFnB.php" method="post">
                                    <div class="form group">
                                        <input type="hidden" class="form-control" id="comboID" name="comboID" value="<?php echo $comboId; ?>">
                                        <br><br>
                                        <label for="comboName">Combo name:</label>
                                        <input type="text" class="form-control" id="comboName" name="comboName" value="<?php echo $comboName; ?>">
                                        <br><br>
                                        <label for="comboImg">Combo Img: </label>
                                        <input type="text" class="form-control" id="comboImg" name="comboImg" value="<?php echo $comboImg; ?>">
                                        <br><br>
                                        <label for="comboPrice">Combo price:</label>
                                        <input type="int" class="form-control" id="comboPrice" name="comboPrice" value="<?php echo $comboPrice; ?>">
                                        <br><br>
                                        <label for="comboQuantity">Combo quantity:</label>
                                        <input type="int" class="form-control" id="comboQuantity" name="comboQuantity" value="<?php $comboQuantity; ?>">
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