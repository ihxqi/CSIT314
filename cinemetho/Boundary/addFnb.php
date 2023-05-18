<?php
include_once("../Controller/addFnBCtl.php"); //change 

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";


if (isset($_POST["addFnb"])) {
    $comboName = $_POST["comboName"];
    $comboImg = $_POST["comboImg"];
    $comboPrice = $_POST["comboPrice"];
    $comboQuantity = $_POST["comboQuantity"];

    validateComboName($e1);
    validateComboImg($e2);
    validateComboPrice($e3);
    validateComboQuantity($e4);

    if (empty($e1) && empty($e2) && empty($e3) && empty($e4)) {
        $aFc = new addFnBCtl();
        $results = $aFc->addFnB($comboName, $comboImg, $comboPrice, $comboQuantity);
    }
}


function validateComboName(&$e1)
{
    global $comboName;
    $comboName = trim($_POST["comboName"]);
    if (empty($comboName)) {
        $e1 = "Please fill in combo name";
    }
}

function validateComboImg(&$e2)
{
    global $comboImg;
    $comboImg = trim($_POST["comboImg"]);
    if (empty($comboImg)) {
        $e2 = "Please fill in combo image";
    }
}


function validateComboPrice(&$e3)
{
    global $comboPrice;
    $comboPrice = trim($_POST["comboPrice"]);
    if (empty($comboPrice)) {
        $e3 = "Please fill in combo price";
    }
}

function validateComboQuantity(&$e4)
{
    global $comboQuantity;
    $comboQuantity = trim($_POST["comboQuantity"]);
    if (empty($comboQuantity)) {
        $e5 = "Please fill in combo price";
    }
}



?>

<html>

<head>
    <title>Add fnb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
                <div class="topnav">
                    <a href="../Boundary/index.php" onclick="logout()">LOG OUT</a>
                    <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnb.php">F&B</a>
                     <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
        <div class="backgroundImage">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <label type="text"><strong>Add Combo</strong></button>
                </div>
                <h3></h3>

                <?php
                ?>

                <form method="post" id="addFnb" class="user-input" onsubmit="return checkForm(this);" style="width:50%">

                    </select>
                    <br><br>
                    <input type="text" name="comboName" class="input-field" placeholder="Combo Name" required>
                    <span>
                        <?php echo $e1 ?> <!--unsure-->
                    </span>
                    <input type="text" name="comboImg" class="input-field" placeholder="Combo Image" required style="width:200%; height:10%; border: 1px solid #808080;">
                    <br><br>
                    <input type="int" name="comboPrice" class="input-field" placeholder="Combo Price" required><br><br>
                    <br><br>
                    <input type="int" name="comboQuantity" class="input-field" placeholder="Combo Quantity" required><br><br>

                    <input type="submit" name="addFnb" class="submit-btn button3" value="Add food combo">
                </form>
            </div>
        </div>
    </div>

</html>
<script>
    var y = document.getElementById("addFnb");
    var z = document.getElementById("btn");

    function addUser() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
</script>
<script>
    window.onload = function() {
        var alertDiv = document.getElementById('alert-message');
        var alertMessage = alertMessage || '';
        if (alertMessage.length > 0) {
            alertDiv.innerHTML = '<p>' + alertMessage + '</p>';
        }
    };


    function addUserSuccess() {
        alert("You have successfully added!")
    }

    function clearForm() {
        document.getElementById("addF&b").reset();
    }
</script>
</body>