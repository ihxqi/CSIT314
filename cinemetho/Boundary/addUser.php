<?php
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
<body>
	<div class="backgroundImage">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addUser()"><strong>Add User</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addUser" class="user-input" onsubmit="return checkForm(this);">
			<label for="user_profile">User profile:</label>
			<select name="user_profile" id="user_profile">
			<option value="User Admin">User Admin</option>
			<option value="Cinema Owner">Cinema Owner</option>
			<option value="Cinema Manager">Cinema Manager</option>
			<option value="Customer">Customer</option>			
			</select>
			<input type="text" name="username" class="input-field" placeholder="Username" required>
			<span>
     		  <?php echo $e1 ?>
  			</span>
			<input type="email" name="email" class="input-field" placeholder="Email" required>
			<input type="text" name="password" class="input-field" placeholder="Password" required><br><br>
		
			<input type="submit" name="addUser" class="submit-btn" value="Add User">
		</form>
		</div>
	</div>
	</html>
	<script>
	var y = document.getElementById("addUser");	
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
 		document.getElementById("addUser").reset();
	}

	
	</script>
</body>