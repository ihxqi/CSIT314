<?php
include_once("../Controller/addUserProfileCtl.php");

$e1 = " ";
$e2 = "testAddProfile@gmail.com";
$e3 = "testAddProfile";
$e4 = "";

if (isset($_POST["addProfile"])) {
    validateUserProfile($e4);
    if (empty($e1) && empty($e2) && empty($e3) && empty($e4)) {
        addUserProfile($_POST["username"], $_POST["email"], $_POST["password"], $_POST["user_profile"]);
    }
}

function validateUserProfile(&$e4)
{
    global $e1;
    $custProfile = trim($_POST["user_profile"]);
    if (empty($custProfile)) {
        $e4 = "Please fill your profile";
    }
}

function addUserProfile($username, $email, $password, $user_profile)
{
    global $e1;
    $cRC = new addUserProfileCtl();
    $results = $cRC->addUserProfile($username, $email, $password, $user_profile);
    if ($results == true) {
        echo "Add SUCCESSFUL";
    } else {
        echo "Add Failed";
        $e1 = "User Profile Name taken";
    }
}
?>

<html>
<body>
	<div class="backgroundImage">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addProfile()"><strong>Add User</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addProfile" class="user-input" onsubmit="return checkForm(this);">
			<input type="text" name="user_profile" class="input-field" placeholder="User profile" required>
			<span>
     		  <?php echo $e1 ?>
  			</span>
			<input type="submit" name="addProfile" class="submit-btn" value="Add Profile">
		</form>
		</div>
	</div>
	</html>
	<script>
	var y = document.getElementById("addProfile");	
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