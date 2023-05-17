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
    <title>Cinema Manager - Update F&B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../cm_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    <a href="../Boundary/manageTickets.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageCinemaRooms.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnb.php">F&B</a>
                    <a class="active" href="cinemaManager.php">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="main">
            <div class="section section-basic">
                <div class="container1" style="text-align:left;">
                    <h2>Food Combo Information</h2>
                    <hr color="orange">
                    <a href='manageFnB.php' class='btn btn-warning btn-round button2'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update Food</h3>
                            </div>
                            <div class="panel-body">
                                <form action="updateFnB.php" method="post">
                                    <div class="form group">
                                        <input type="hidden" class="form-control text-input" id="comboID" name="comboID" value="<?php echo $comboId; ?>">
                                        <br><br>
                                        <label for="comboName">Combo name:</label>
                                        <input type="text" class="form-control text-input" id="comboName" name="comboName" value="<?php echo $comboName; ?>">
                                        <br><br>
                                        <label for="comboImg">Combo Img: </label>
                                        <input type="text" class="form-control text-input" id="comboImg" name="comboImg" value="<?php echo $comboImg; ?>">
                                        <br><br>
                                        <label for="comboPrice">Combo price:</label>
                                        <input type="int" class="form-control text-input" id="comboPrice" name="comboPrice" value="<?php echo $comboPrice; ?>">
                                        <br><br>
                                        <label for="comboQuantity">Combo quantity:</label>
                                        <input type="int" class="form-control text-input" id="comboQuantity" name="comboQuantity" value="<?php $comboQuantity; ?>">
                                    </div>
                                    <br>
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round button4" id="submit" name="update">
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