<?php
session_start();
include_once '..\cinemetho\login\class.php';
$user = new User();

// Registration
if(isset($_POST['register'])) {
    $username = strip_tags($_POST['username']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $profile = strip_tags($_POST['profile']);
        
    $register = $user->register($username, $email, $password, $profile);
        
    if($register) {
        echo 'Registration successful';
    } else {
        echo 'Registration failed. Email already exists please try again';
    }
}

// Login
if(isset($_POST['login'])) {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
        
    $login = $user->login($username, $password);
        
    if($login) {
        header('location: ../cinemetho/UserProfile/custProfile.php');
    } else {
        echo 'Login failed please try again';
    }
}
?>

<html>
<head>
<title>Cinemetho - A Cinema Ticket Booking System</title>
</head>
<style>
	*
	{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
	}
	 
	.backgroundImage
	{
		height: 100%;
		width: 100%;
		background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(image/background.jpeg);
		background-position: center;
		background-size: cover;
		position: absolute;
	}
	
	.form-box
	{
		width: 380px;
		height: 480px;
		position: relative;
		margin: 3% auto;
		background: #fff;
		padding: 5px;
		overflow: hidden;
	}
	
	.button-box
	{
		width: 250px;
		margin: 35px auto;
		position: relative;
		box-shadow: 0 0 10px 3px #800000;
		border-radius: 30px;
	}
	
	.login-btn
	{
		padding-top: 14px;
		padding-right: 11px;
		padding-bottom: 14px;
		padding-left: 50px;
		cursor: pointer;
		background: transparent;
		border: 0;
		outline: none;
		position: relative;
	}
	
	#btn
	{
		top: 0;
		left: 0;
		position: absolute;
		width: 140px;
		height: 100%;
		background: linear-gradient(to right, #008080, #DCAE96);
		border-radius:30px;
		transition: .5s;
	}
	
	.user-input
	{
		top: 170px;
		position: absolute;
		width: 280px;
		transition: .5s;
	}
	
	.input-field
	{
		width: 100%;
		padding: 15px 0 5px;
		margin: 5px 0;
		border-left: 0;
		border-top: 0;
		border-right: 0;
		border-bottom: 1px solid #777;
		outline: none;
		background: transparent;
	}
	
	.submit-btn
	{
		width: 85%;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin: auto;
		background: linear-gradient(to right, #008080, #DCAE96);
		border: 0;
		outline: none;
		border-radius: 30px;
	}
	
	.check-box
	{
		margin: 3px 10px 30px 0;
	}
	
	span
	{
		color: #777;
		font-size: 14px;
		position: absolute;
	}
	
	#register label
	{
		font-size: 15px;
	}
	
	#login
	{
		left: 50px;
	}
	
	#register
	{
		left: 450px;
	}
</style>

<body>
	<div class="backgroundImage">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="login()"><strong>Login</strong></button>
				<button type="button" class="login-btn" onclick="register()"><strong>Register</strong></button>
			</div>		
			<h3></h3>
			<form id="login" class="user-input" method="POST">
				<label for="userProfile">Login as:</label>
				<select name="userProfile" id="userProfile">
				<option value="member">Member</option>
				<option value="cinemaManager">Cinema Manager</option>
				<option value="reportManager">Report Manager</option>
				<option value="userAdministrator">User Administrator</option>			
				</select>
   				 <input type="text" name="username" class="input-field" placeholder="Username" required>
   				 <input type="password" name="password" class="input-field" placeholder="Password" required><br><br>
   				 <input type="checkbox" class="check-box">
   				 <span>Remember password ?</span>
   				 <input type="submit" name="login" class="submit-btn" value="Login">
			</form>
		
		<form method="post" id="register" class="user-input">
			<label for="profile">Customer profile:</label>
			<select name="profile" id="profile">
			<option value="Adult">Adult</option>
			<option value="Child">Child(Below 8yo)</option>
			<option value="Senior">Senior Citizen(Above 65yo)</option>
			<option value="Student">Student</option>			
			</select>
			<input type="text" name="username" class="input-field" placeholder="Username" required>
			<input type="email" name="email" class="input-field" placeholder="Email" required>
			<input type="text" name="password" class="input-field" placeholder="Password" required><br><br>
			<input type="checkbox" class="check-box">
			<span>I agree to the <a href="#">terms & conditions</a></span>
			<input type="submit" name="register" class="submit-btn" value="Register">
		</form>
		</div>
	</div>
	
	<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");	
	var z = document.getElementById("btn");
	
	function register()
	{
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	
	function login()
	{
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0px";
	}
	
	</script>
	<script>
	function registerSuccess()
	{
		alert("You have successfully registered!")
	}

	function clearForm() 
	{
 		document.getElementById("register").reset();
	}

	
	</script>
</body>
</html>
