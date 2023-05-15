<?php //need to change
include_once("../Controller/UserAccountLoginCtl.php");
include_once("../Controller/addUserAccountCtl.php");

$username = "";
$password = "";
$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";

if (isset($_POST["addUser"])) {
    validateUsername($e1);
    validatePassword($e2);
    validateEmail($e3);
    validateUserProfile($e4);
    if (empty($e1) && empty($e2) && empty($e3) && empty($e4)) {
        addUserAccount($_POST["username"], $_POST["email"], $_POST["password"],$_POST["user_profile"]);
    }
}

function validateUserName(&$e1)
{
    global $username;
    $username = trim($_POST["username"]);
    if (empty($username)) {
        $e1 = "Please fill in Username";
    }

}

function validatePassword(&$e2)
{
    global $password;
    $password = trim($_POST["password"]);
    if (empty($password)) {
        $e2 = "Please fill in password";
    }
}

function validateEmail(&$e3)
{
    global $email;
    $email = trim($_POST["email"]);
    if (empty($email)) {
        $e3 = "Please fill in email";
    }
}

function validateUserProfile(&$e4)
{
    global $custProfile;
    $custProfile = trim($_POST["user_profile"]);
    if (empty($custProfile)) {
        $e5 = "Please select your profile";
    }
}


function addUserAccount($username, $password, $email, $user_profile)
{
    global $e1;
    $cRC = new addUserAccountCtl();
    $results = $cRC->addUserAccount($username, $password, $email, $user_profile);
    if ($results == true) {
        echo "Signup SUCCESSFUL";
    } else {
        echo "SignUP Failed";
        $e1 = "User Name taken";
    }
}

?> 

<html>

<head>
    <title></title>
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
				<button type="button" class="login-btn" onclick="addTicket()"><strong>Add User</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addTicket" class="user-input" onsubmit="return checkForm(this);" style="width:50%">
			<br><br>
			<input type="text" name="Ticket_cust_profile" class="input-field" placeholder="Customer profile" required style="width:200%; height:10%; border: 1px solid #808080;">
			<br><br>
			<input type="text" name="TicketPrice" class="input-field" placeholder="TicketPrice" required><br><br>
		
			<input type="submit" name="addUser" class="submit-btn button3" value="Add User">
		</form>
		</div>
	</div>
</div>
	</html>
	<script>
	var y = document.getElementById("addTicket");	
	var z = document.getElementById("btn");
	
	function addTicket()
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


	function addTicketSucess()
	{
		alert("You have successfully added!")
	}

	function clearForm() 
	{
 		document.getElementById("addTicket").reset();
	}

	
	</script>
</body>