<?php
include_once("../Controller/addTicketCtl.php");

$e1 = "";
$e2 = "";
$e3 = ""; 


if (isset($_POST["addTicket"])) {
    //$ticket_id = $_POST["ticket_id"];
    $ticketCustProfile = $_POST["ticket_cust_profile"];
    $ticket_price = $_POST["ticket_price"];

    //validateTicketId($e1);
    validateTicketCustProfile($e2);
    validateTicketPrice($e3);

    if (empty($e3) && empty($e2)) {
        $aTc = new addTicketCtl();
        $results = $aTc->addTicket($ticket_price, $ticket_cust_profile);
    }
}


function validateTicketId(&$e1)
{
    global $ticket_id;
    $ticket_id = trim($_POST["ticket_id"]);
    if (empty($ticket_id)) {
        $e1 = "Please fill in ticket Id";
    }
}

function validateTicketCustProfile(&$e2)
{
    global $ticket_cust_profile;
    $ticket_cust_profile = trim($_POST["ticket_cust_profile"]);
    if (empty($ticket_cust_profile)) {
        $e2 = "Please fill in ticket customer profile";
    }
}


function validateTicketPrice(&$e3)
{
    global $ticket_price;
    $ticket_price = trim($_POST["ticket_price"]);
    if (empty($ticket_price)) {
        $e3 = "Please fill in ticket price";
    }
}

?>

<html>

<head>
    <title></title>
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
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="../Boundary/manageTicket.php">TICKETS</a> 
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> 
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>
                        
                </div>
            </div>
        </section>
        <hr>	
			<h2>Add Ticket:</h2>
			
			<?php
         ?>
		
		<form method="post" id="addTicket" class="user-input" onsubmit="return checkForm(this);" style="width:50%">
            
            <label>Ticket price:</label>
			<input type="text" name="ticket_price" class="input-field" placeholder="Ticket price" required style="width:50%"><br><br>
            
            <label>Customer profile:</label>
            <input type="text" name="ticket_cust_profile" class="input-field" placeholder="Customer profile" required style="width:50%">
			<input type="submit" name="addTicket" class="submit-btn button3" value="Add User" style="width:50%; height:5%; padding:2%;">
		</form>
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