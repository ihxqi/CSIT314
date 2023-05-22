<?php
include_once("../Controller/getTicketByIDCtl.php");
include_once("../Controller/updateTicketCtl.php");

if (isset($_POST['update'])) {
    $ticket_id = $_POST['ticket_id'];
    $ticket_price = $_POST['ticket_price'];
    $ticket_cust_profile = $_POST['ticket_cust_profile'];

    // checking empty fields
    if (empty($ticket_id) || empty($ticket_price) || empty($ticket_cust_profile)) {
        // Error handling code
    } else {
        // Updating the table
        $utic = new updateTicketCtl();
        $result = $utic->updateTicket($ticket_id, $ticket_price, $ticket_cust_profile);

        if ($result) {
            header("Location: ../Boundary/manageTicket.php");
            exit();
        }
    }
}

$ticket_id = isset($_GET['ticket_id']) ? $_GET['ticket_id'] : die('ERROR: ID not found.');
$ticket_price = isset($_GET['ticket_price']) ? $_GET['ticket_price'] : die('ERROR: ID not found.');
$ticket_cust_profile = isset($_GET['ticket_cust_profile']) ? $_GET['ticket_cust_profile'] : die('ERROR: ID not found.');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Cinema Manager - Update Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("../Images/background.jpeg");
        }
    </style>
</head>

<body class="index-page sidebar-collapse">
    <div class="white-box">
        <section>
            <div class="container1">
                <div class="logo">
                    <img src="../Images/cinemethologo.jpeg">
                </div>
                <div class="topnav">
                    <a href="../Boundary/index.php">LOG OUT</a>
                    <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>
                </div>
            </div>
        </section>
        <hr>
        <br><br>

    <!-- End Navbar -->
    <div class="wrapper">
        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <a href='manageTicket.php' class='btn btn-warning btn-round button2'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading" style="text-align: left;">
                                <h3>Update Ticket:</h3>
                            </div>
                            <div class="panel-body" style="text-align: left;">
                                <form action="updateTicket.php" method="post">
                                    <div class="form group">
                                    <input type="hidden" class="form-control" id="ticket_id" name="ticket_id" value="<?php echo $ticket_id; ?>">
                                       
                                        <label for="ticket_price">Ticket Price:</label>
                                        <input type="text" class="form-control" id="ticket_price" name="ticket_price" value="<?php echo $ticket_price; ?>">
                                        <br><br>
                                        <label for="ticket_cust_profile">Customer Ticket Profile: </label>
                                        <input type="text" class="form-control" id="ticket_cust_profile" name="ticket_cust_profile" value="<?php echo $ticket_cust_profile; ?>">
                                        <br><br>
                                    </div>
                                  
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round button4" id="submit" name="update">
                                            <i class="now-ui-icons ui-1_check"></i> Update Ticket
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>