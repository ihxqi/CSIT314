<!DOCTYPE html>

<?php
include_once("../Controller/UserAccountLoginCtl.php");
$username = "";
$password = "";
$e1 = "";
$e2 = "";

if (isset($_POST["login"])) {
    validateUsername($e1);
    validatePassword($e2);
    validateEmail($e3);
    validatecustProfile($e5);
    if (empty($e1) && empty($e2)) {
        LoginCustomerAccount($_POST["username"], $_POST["password"]);
    }
}

function validateUsername(&$e1)
{
    global $username;
    $userName = trim($_POST["username"]);
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

function validatecustProfile(&$e4)
{
    global $custProfile;
    $custProfile = trim($_POST["cust_profile"]);
    if (empty($custProfile)) {
        $e5 = "Please select your profile";
    }
}
function loginCustomerAccount($userName, $password)
{ 
    global $e1;
    $cLGC = new UserAccountLoginCtl();
    $results = $cLGC->loginCustomerAccount($userName, $password);
    if ($results == true) {
        echo "Login Successful";
    } else {
        echo "Login Failed";
        $e1 = "Please try again";
    }
}
?>

<html>
  <head>
    <title>Customer's profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset = "utf-8">
	<link rel ="stylesheet" href = "../styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
  </head>

  <body>
	<div class="white-box">
		<section>
			<div class="container1">
				<div class="logo">
					<img src="../Images/cinemethologo.jpeg">
				</div>
		
				<div class="topnav">
					<a href="index.html" onclick="logout()">LOG OUT</a>
					<a href="../Boundary/custProfile.php">PROFILE</a>
					<a href="../Boundary/eTicket.php">E-TICKETS</a>
					<a href="../Boundary/userBooking.php">BUY TICKETS</a>
					<a href="../Boundary/movieListing.php">MOVIES</a>
				</div>
			</div> 
		</section>
		<hr>
		<br><br>
		<section>
			<div class="form-box" style="text-align: center;">
				<h1 class="profile">My profile setting</h1><br>
				<div class="content">
					<form>
						<div class="user-details">         
							<div class="input-box">
							<input type="text" placeholder="Username" readonly value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
							</div><br>
							<div class="input-box">
								<span class="details">Birthday: (optional)</span>
								<input type="date">
							</div><br>
						</div><br>       
							<input class="button" type="button" onclick="update()" formaction="cMovie.html" value="Update Profile" style="margin:0.5em;"><br>
							<input class="button" type="submit" onclick="deactivate()" formaction="index.html" value="Deactivate Account" style="margin:0.5em;"><br>
							<input class="button" type="submit" name="logout" onclick="clearForm()" formaction="../Boundary/index.php"  value="Log Out"  style="margin:0.5em;"><br>
					</form>
				</div>
			  </div>
		</section>
	</div>
	
  
	<script>
		function deactivate()
		{
			alert("You have successfully deactivated your account!")
		}
	</script>
	<script>
		function update()
		{
			alert("You have successfully updated your profile!")
		}
	</script>
  </body>
</html>