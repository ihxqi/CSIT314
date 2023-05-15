<?php
include_once("../Controller/UserAccountLoginCtl.php"); //change
include_once("../Controller/addUserAccountCtl.php"); //change 

$username = "";
$password = "";
$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";



if (isset($_POST["addf&b"])) {
    validateUsername($e1);
    validatePassword($e2);
    validateEmail($e3);
    validateUserProfile($e4);
    if (empty($e1) && empty($e2) && empty($e3) && empty($e4)) {
        addUserAccount($_POST["username"], $_POST["email"], $_POST["password"],$_POST["user_profile"]);
    }
}

function validateComboName(&$e1)
{
    global $comboName;
    $comboName = trim($_POST["combo_name"]);
    if (empty($comboName)) {
        $e1 = "Please fill in combo name";
    }

}

function validateComboDescription(&$e2)
{
    global $comboDescription;
    $comboDescription = trim($_POST["combo_description"]);
    if (empty($comboDescription)) {
        $e2 = "Please fill in combo description";
    }
}


function validateComboPrice(&$e3)
{
    global $comboPrice;
    $comboPrice = trim($_POST["combo_price"]);
    if (empty($comboPrice)) {
        $e3 = "Please fill in combo price";
    }
}

function validateComboQuantity(&$e4)
{
    global $comboQuantity;
    $comboQuantity = trim($_POST["combo_quantity"]);
    if (empty($comboQuantity)) {
        $e5 = "Please fill in combo price";
    }
}


function addF&b($combo_name, $combo_description, $combo_price, $combo_quantity)
{
    global $e1;
    $cRC = new addUserAccountCtl(); //mneed to change
    $results = $cRC->addF&b($combo_name, $combo_description, $combo_price, $combo_quantity); // need to change
    if ($results == true) {
        echo "Addition of combo SUCCESSFUL";
    } else {
        echo "Addition of combo Failed";
        $e1 = "Combo name taken";
    }
}

?>

<html>

<head>
    <title>Add f</title>
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
                <a href="#" onclick="logout()">LOG OUT</a>
                        <a href="../Boundary/custProfile.php">TICKETS</a> <!-- need change -->
                        <a href="../Boundary/custProfile.php">CINEMA ROOMS</a> <!-- need change -->
                        <a href="../Boundary/manageMovies.php">MOVIES</a>
                        <a href="../Boundary/manageF&b.php">F&B</a>
                        <a class="active" href="cinemaManager.html">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
	<div class="backgroundImage">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addUser()"><strong>Add User</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addF&b" class="user-input" onsubmit="return checkForm(this);" style="width:50%">
				
			</select>
			<br><br>
			<input type="text" name="combo_name" class="input-field" placeholder="Combo Name" required >
			<span>
     		  <?php echo $e1 ?> <!--unsure-->
  			</span>
			<input type="text" name="combo_description" class="input-field" placeholder="Combo description" required style="width:200%; height:10%; border: 1px solid #808080;">
			<br><br>
			<input type="int" name="combo_price" class="input-field" placeholder="Combo quantity" required><br><br>
            <br><br>
			<input type="int" name="combo_quantity" class="input-field" placeholder="Combo quantity" required><br><br>
		
			<input type="submit" name="addF&b" class="submit-btn button3" value="Add food combo">
		</form>
		</div>
	</div>
</div>
	</html>
	<script>
	var y = document.getElementById("addF&b");	
	var z = document.getElementById("btn");
	
	function addUser()
	{
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


	function addUserSuccess()
	{
		alert("You have successfully added!")
	}

	function clearForm() 
	{
 		document.getElementById("addF&b").reset();
	}

	
	</script>
</body>