<?php
// including the database connection file
include("../config.php");
include_once("../Controller/getUserAccountByIDCtl.php");

if(isset($_POST['update']))
{   
    $id = $_POST['Ticket_cust_profile'];
    $TicketPrice = $_POST['TicketPrice'];

    // checking empty fields
    if(empty($Ticket_cust_profile) || empty($TicketPrice) ) {    
        if(empty($Ticket_cust_profile)) {
            echo "<font color='red'>Customer profile field is empty!</font><br/>";
        }
        if(empty($TicketPrice)) {
            echo "<font color='red'>Ticket price field is empty!</font><br/>";
        }

    } else {    
        //updating the table
        require_once('../Controller/updateTicketClt.php'); // need to create file
        $ticketClt = new updateTicketClt();
        $result = $ticketClt->updateTicket($id, $TicketPrice);

        if($result){
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/manageTicket.php");
        }
    }
}
?>

<?php //need to change to suit
//getting id from url
$id=isset($_GET['Ticket_cust_profile']) ? $_GET['Ticket_cust_profile'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$userAccount = new UserAccount();
$userAccountData = $userAccount->getUserAccountByID($id);

if(!$userAccountData) {
    die('ERROR: Record not found.');
}

$username = $userAccountData['username'];
$password = $userAccountData['password'];


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
                      <h2>User Account Information</h2>
                      <hr color="orange">
                      <a href='manageUser.php' class='btn btn-warning btn-round'>Back</a>
                <br>
                <div class="col-md-12">
      

            <div class="panel panel-success panel-size-custom">
                <div class="panel-heading"><h3>Update User</h3></div>
                  <div class="panel-body">
                    <form action="updateUserAccount.php" method="post">
                        <div class="form group">
                            <label for="username">Customer profile:</label>
                            <input type="text" class="form-control" id="Ticket_cust_profile" name="Ticket_cust_profile" value="<?php echo $Ticket_cust_profile;?>">
                            <br><br>
                            <label for="TicketPrice">Ticket price: </label>
                            <input type="text" class="form-control" id="TicketPrice" name="TicketPrice" value="<?php echo $TicketPrice;?>">
                            
                        </div>
                        <br>
                        <div class="form group">
                            <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                            <i class="now-ui-icons ui-1_check"></i> Update Ticket Prices
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