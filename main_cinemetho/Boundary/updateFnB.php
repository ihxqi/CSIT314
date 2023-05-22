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

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Food Combo</title>
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
                    <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>
                </div>
            </div>
        </section>
        <hr>
        <br><br>

        <!-- End Navbar -->
        <div class="wrapper">
            <br>
            <div class="main">
                <div class="section section-basic">
                    <div class="container">
                        <a href='manageFnB.php' class='btn btn-warning btn-round button2'>Back</a>
                        <br>
                        <div class="col-md-12">


                            <div class="panel panel-success panel-size-custom">
                                <div class="panel-heading" style="text-align: left;">
                                    <h3>Update Food Combo:</h3>
                                </div>
                                <div class="panel-body" style="text-align: left;">
                                    <form action="updateFnB.php" method="post">
                                        <div class="form group">
                                            <input type="hidden" class="form-control" id="comboID" name="comboID" value="<?php echo $comboId; ?>">
                                            <label for="comboName">Combo name:</label>
                                            <input type="text" class="form-control" id="comboName" name="comboName" value="<?php echo $comboName; ?>">
                                            <br>
                                            <label for="comboImg">Combo image path: </label>
                                            <input type="text" class="form-control" id="comboImg" name="comboImg" value="<?php echo $comboImg; ?>">
                                            <br>
                                            <label for="comboPrice">Combo price:</label>
                                            <input type="int" class="form-control" id="comboPrice" name="comboPrice" value="<?php echo $comboPrice; ?>">
                                            <br><br>
                                            <label for="comboQuantity">Combo quantity:</label>
                                            <input type="int" class="form-control" id="comboQuantity" name="comboQuantity" value="<?php echo $comboQuantity; ?>">
                                        </div>
                                        <br>
                                        <div class="form group">
                                            <button type="submit" class="btn btn-success btn-round button4" id="submit" name="update">
                                                <i class="now-ui-icons ui-1_check"></i> Update Food Combo
                                            </button>
                                        </div>
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