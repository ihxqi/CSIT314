<?php
include_once("../Controller/fnbListingCtl.php");

// Create an object of the DisplayMovierCtl class
$fnbCtlObj = new DisplayFnbCtl();

// Call the DisplayMovierCtl() function to get all movies
$fnbs = $fnbCtlObj->DisplayFnbCtl();
?>
<!doctype html>

<html>

<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie booking</title>
    <link rel ="stylesheet" type="text/css"  href = "../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <style>
        .box {
            margin: 10px; /* Add padding around each movie */
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
				<a href="../Boundary/index.php" onclick="logout()">LOG OUT</a>
                <a href="../Boundary/custProfile.php">PROFILE</a> 
                <a href="../Boundary/etickets.php">E-TICKETS</a> <!-- need to wait for the file -->
                <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                <a href="../Boundary/movieListing.php">MOVIES</a>
                </div>
            </div> 
        </section>
        

 
        <br><br>

     <section>
            <div class="container">
                <table style="width:225%;">
                    <form style="display: inline-block;">
                        <tr>
                            <th colspan="3">
                                <h1>Food combos:</h1>
                            </th>
                        </tr>

                        <?php foreach ($fnbs as $fnb) { ?>
                            <tr>
                                <td>
                                    <input type="checkbox" id="<?php echo $fnb['comboID']; ?>" />
                                    <label for="<?php echo $fnb['comboID']; ?>">
                                    <img src="../Images/<?php echo $fnb['comboImg']; ?>" />
                                    </label>
                                    <p><?php echo $fnb['comboName']; ?></p>
                                    <p>Price: $<?php echo $fnb['comboPrice']; ?></p>
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="3">
                                <a href="payment.php"><input class="button" value="Submit Food selection"></a>
                            </td>
                        </tr>

                    </form>
                </table>

            </div>
        </section>
    </div>

<script src="../script.js">
function logout() 
			{
				// Code to handle logout
				console.log("Logged out");
				window.location.href = 'index.html'; // redirect to login page after logout
			}
</script>

    
    
</body>

</html>