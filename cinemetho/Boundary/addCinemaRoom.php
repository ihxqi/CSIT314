<?php
include_once("../Controller/addCinemaRoomCtl.php");

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";
$e5 = "";


if (isset($_POST["addCinemaRoom"])) {
    validateRoomNo($e1);
    validateCapacity($e2);
    validateShowTime($e3);
    validateMovieDate($e4);
    validateMovieId($e5);
    if (empty($e1) && empty($e2) && empty($e3) && empty($e4)) {
        addCinemaRoom($_POST["room_no"], $_POST["room_capacity"], $_POST["room_showtime"], $_POST["room_showdate"], $_POST["room_movieid"]);
    }
}

function validateRoomNo(&$e1)
{
    global $roomNo;
    $roomNo = trim($_POST["room_no"]);
    if (empty($roomNo)) {
        $e1 = "Please fill in the room number";
    }

}

function validateCapacity(&$e2)
{
    global $capacity;
    $capacity = trim($_POST["room_capacity"]);
    if (empty($capacity)) {
        $e2 = "Please fill in the room capacity";
    }
}


function validateShowTime(&$e3)
{
    global $showTime;
    $showTime = trim($_POST["room_showtime"]);
    if (empty($showTime)) {
        $e3 = "Please fill in movie show time";
    }
}

function validateMovieDate(&$e4)
{
    global $movieDate;
    $movieDate = trim($_POST["room_showdate"]); 
    if (empty($movieDate)) {
        $e4 = "Please fill in movie date";
    }
}
function validateMovieId(&$e5)
{
    global $movieId;
    $movieId = trim($_POST["room_movieid"]); 
    if (empty($movieId)) {
        $e5 = "Please fill in movie id";
    }
}

function addCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId)
{
    global $e1;
    $acr = new addCinemaRoomCtl();
    $results = $acr->addCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId);
    if ($results == true) {
        echo "Addition of Cinema Room Successful!";
    } else {
        echo "Addition of Cinema Room Failed!";
        $e1 = "Cinema Room Number Taken";
    }
}

?>

<html>
<head>
    <title>Cinema Manger - Add Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cm_style.css">
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
                        <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                        <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                        <a href="../Boundary/manageMovies.php">MOVIES</a>
                        <a href="../Boundary/manageF&b.php">F&B</a>
                        <a class="active" href="cinemaManager.php">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
	<div class="backgroundImage">
		<div class="form-box">
			<h2>Add Room</h2>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addRoom()"><strong>Add Room</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addRoom" class="user-input" onsubmit="return checkForm(this);" style="width:50%">
				
			</select>
			<br><br>
			<input type="text" name="room__no" class="input-field" placeholder="Room No." required><br><br>           				
			<input type="text" name="room_capacity" class="input-field" placeholder="Room Capacity" required><br><br>  
			<input type="text" name="room_movieid" class="input-field" placeholder="Room Movie" required><br><br>  
			<input type="text" name="room_showtime" class="input-field" placeholder="Room Showtime" required><br><br>  
			<input type="text" name="room_showdate" class="input-field" placeholder="Room Showdate" required><br><br>  
			<input type="submit" name="addRoom" class="submit-btn button3" value="Add Room">
		</form>
		</div>
	</div>
</div>
	</html>
	<script>
	var y = document.getElementById("addRoom");	
	var z = document.getElementById("btn");
	
	function addRoom()
	{
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}

  	window.onload = function() {
    var alertDiv = document.getElementById('alert-message');
    var alertMessage = alertMessage || '';
    if (alertMessage.length > 0) {
      alertDiv.innerHTML = '<p>' + alertMessage + '</p>';
    }
  };

	function addRoomSuccess()
	{
		alert("You have successfully added!")
	}

	function clearForm() 
	{
 		document.getElementById("addRoom").reset();
	}
	</script>
</body>