<?php
include_once("../Controller/getTicketCtl.php");
include_once("../Controller/searchTicketCtl.php");

$ticketClt = new getTicketCtl();
$tickets = $ticketClt->getTicket();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$searchCtl = new searchTicketCtl();

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $tickets = $searchCtl->searchTicket($search);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Cinema Manager - Tickets' Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../cm_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
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
                    <a href="../Boundary/manageFnb.php">F&B</a>
                    <a class="active" href="cinemaManager.php">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>

        <hr>
        <br><br>

        <div class="container1" style="margin-top: -5%; margin-bottom: 3%;">
            <div class="search">
                <form method="POST">
                    <div class="search-bar">
                        <input type="text" class="searchTerm" name="search" placeholder="Search by Customer Profile">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="topnav" style="margin-top: 1%;">
                <a onclick="location.href='addTicket.php';" style="margin-left: 5%;">
                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add User
                </a>
            </div>
        </div>

        <table id="ticketTable" class="CMtable">
            <tr>
                <th>CustProf ID</th>
                <th>Prices</th>
                <th>Customer Profile</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($tickets as $ticket) : ?>
                <tr>
                    <td><?php echo $ticket['ticket_id']; ?></td>
                    <td><?php echo $ticket['ticket_price']; ?></td>
                    <td><?php echo $ticket['ticket_cust_profile']; ?></td>
                    <td><?php echo $ticket['ticket_status']; ?></td>
                    <td>
                        <a href="updateTicket.php?ticket_id=<?php echo $ticket['ticket_id']; ?>&ticket_cust_profile=<?php echo $ticket['ticket_cust_profile']; ?>&ticket_price=<?php echo $ticket['ticket_price']; ?>">Update</a> |
                        <a href="suspendTicket.php?ticket_id=<?php echo $ticket['ticket_id']; ?>" onClick="return confirm('Are you sure you want to suspend?')">Suspend</a> |
                        <a href="activateTicket.php?ticket_id=<?php echo $ticket['ticket_id']; ?>" onClick="return confirm('Are you sure you want to activate?')">Activate</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('.searchButton').addEventListener('click', function(e) {
                e.preventDefault();
                var searchVal = document.querySelector('.searchTerm').value.toLowerCase();
                var table = document.getElementById('ticketTable');

                for (var i = 1, row; row = table.rows[i]; i++) {
                    var ticket = row.cells[2].innerText.toLowerCase();

                    if (ticket.includes(searchVal)) {
                        row.style.display = "";
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });

        function logout() {
            // Code to handle logout
            console.log("Logged out");
            window.location.href = 'index.html'; // redirect to login page after logout
        }
    </script>
</body>

</html>
