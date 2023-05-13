<?php
include_once("../Controller/addUserProfileCtl.php");

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";

if (isset($_POST["addUserProfile"])) {
    $addUserProfileCtl = new addUserProfileCtl();
    $addUserProfileCtl->addUserProfile($_POST["upName"]);
}

?>

<html>

<body>
	<div class="backgroundImage">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addUserProfile()"><strong>Add User</strong></button>
			</div>
			<h3></h3>

			<?php
			?>

			<form method="post" id="addUserProfile" name="addUserProfile" class="user-input" onsubmit="return checkForm(this);">
				<input type="text" name="upName" class="input-field" placeholder="User profile" required>
				<span>
					<?php echo $e1 ?>
				</span>
				<input type="submit" name="addUserProfile" class="submit-btn" value="Add Profile">
			</form>
		</div>
	</div>

</html>
<script>
	var y = document.getElementById("addUserProfile");
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
		document.getElementById("addUser").reset();
	}
</script>
</body>