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
<head>
    <title>User Admin - Add user profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url("../Images/background.jpeg");
        }

    </style>
</head>

<body>
<div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
                <div class="topnav">
                    <a href="index.php" onclick="logout()">LOG OUT</a>
                    <a href="userAdmin.php">PROFILE</a>
                        <a href="manageUser.php">USER</a>
                </div>
            </div>
        </section>
        <hr>
		<div class="form-box">
			<h3>Add Profile:</h3>

			<?php
			?>

			<form method="post" id="addUserProfile" name="addUserProfile" class="user-input" onsubmit="return checkForm(this);">
			<label> User profile:</label>
				<input type="text" name="upName" class="input-field" placeholder="User profile" required>
				<span>
					<?php echo $e1 ?>
				</span>
				<input type="submit" name="addUserProfile" class="submit-btn button3" value="Add Profile">
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