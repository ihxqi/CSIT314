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
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>

<body class="index-page sidebar-collapse">

    <!-- End Navbar -->
    <div class="wrapper">

        <br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                    <h2>Ticket Information</h2>
                    <hr color="orange">
                    <a href='manageTicket.php' class='btn btn-warning btn-round'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update Food</h3>
                            </div>
                            <div class="panel-body">
                                <form action="updateTicket.php" method="post">
                                    <div class="form group">
                                    <input type="hidden" class="form-control" id="ticket_id" name="ticket_id" value="<?php echo $ticket_id; ?>">
                                        <br><br>
                                        <label for="ticket_price">Ticket Price:</label>
                                        <input type="text" class="form-control" id="ticket_price" name="ticket_price" value="<?php echo $ticket_price; ?>">
                                        <br><br>
                                        <label for="ticket_cust_profile">Customer Ticket Profile: </label>
                                        <input type="text" class="form-control" id="ticket_cust_profile" name="ticket_cust_profile" value="<?php echo $ticket_cust_profile; ?>">
                                        <br><br>
                                    </div>
                                    <br>
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
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