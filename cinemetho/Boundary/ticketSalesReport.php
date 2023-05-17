<?php
include_once("../Controller/ticketSalesCtl.php");

// Create an object of the DisplayMovierCtl class
$ticketSalesObj = new getTicketSalesCtl();

$startDate = date('Y-m-d');
$endDate = date('Y-m-d');

// Retrieve the request body
$requestBody = file_get_contents('php://input');

// Decode the request body into a PHP object
$data = json_decode($requestBody);

// Get the start date and end date from the PHP object
if ($data) {
    $startDate = $data->start_date;
    $endDate = $data->end_date;
}

if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
}

// Call the getticketSales() function with the start date and end date
$ticketSales = $ticketSalesObj->getTicketSales($startDate, $endDate);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Cinema Owner - F&B Sales Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../co_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
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
                    <a href="../Boundary/ticketSalesReport.php">TICKETS</a>
                    <a href="../Boundary/fnbSalesReport.php">F&B</a>
                </div>
            </div>
        </section>
        <hr>
        <h1>Ticket Sales Report</h1>
        <div>
            <label for="report-type">Report Type:</label>
            <select id="report-type">
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
            </select>
        </div>
        <br>
        <div>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date">
        </div>
        <br>
        <div>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <br>
        <button class="button4" id="generate-report"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Generate Report</button>
        <hr>
        <h2>Ticket Sales</h2>
        <table id="ticket-sales">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Total Sale</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($ticketSales) {
                    foreach ($ticketSales as $ticketSale) {
                        echo "<tr>";
                        echo "<td>" . $ticketSale['bookingDate'] . "</td>";
                        echo "<td>" . $ticketSale['totalSale'] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

<script>
    $(document).ready(function() {
        $('#generate-report').click(function() {
            // Get the start and end dates from the input fields
            var startDate = $('#start_date').val();
            var endDate = $('#end_date').val();
            var reportType = $('#report-type').val();

            if (!startDate) {
                alert("Please select start date.");
                return;
            }
            if (!endDate) {
                alert("Please select end date.");
                return;
            }


            // Check if the report type is "daily" and the start and end dates are the same
            if (reportType == 'daily' && startDate != endDate) {
                alert("Start and end date must be the same.");
                return;
            }

            if(reportType == 'weekly') {
                // Calculate the start date of the selected week
                var weekStartDate = moment(startDate).startOf('week').format('YYYY-MM-DD');
                // Calculate the end date of the selected week (always Sunday)
                var weekEndDate = moment(weekStartDate).add(6, 'days').format('YYYY-MM-DD');
                // Check if the selected end date is more than a week
                if (moment(endDate).diff(moment(weekEndDate), 'days') > 0) {
                    alert("Selected date is more than a week.");
                    return;
                } else if (moment(endDate).diff(moment(startDate), 'days') < 6) {
                    alert("Selected date range is less than a week.");
                    return;
                }

                // Set the start and end dates to the calculated week start and end dates
                startDate = weekStartDate;
                endDate = weekEndDate;
            } else if (reportType == 'monthly') {
                // Calculate the start date of the selected month
                var monthStartDate = moment(startDate).startOf('month').format('YYYY-MM-DD');
                // Calculate the end date of the selected month
                var monthEndDate = moment(startDate).endOf('month').format('YYYY-MM-DD');
                // Check if the selected end date is more than a month
                if (moment(endDate).diff(moment(monthEndDate), 'days') > 0) {
                    alert("Selected date is more than a month.");
                    return;
                } else if (moment(endDate).diff(moment(startDate), 'days') < 30) {
                    alert("Selected date range is less than a month.");
                    return;
                }
                // Set the start and end dates to the calculated month start and end dates
                startDate = monthStartDate;
                endDate = monthEndDate;
            }



            // Send an HTTP request to the server to generate the report
            $.ajax({
                method: 'POST',
                data: {
                    start_date: startDate,
                    end_date: endDate
                },
                success: function(response) {
                    var tbodyHtml = $(response).find('#ticket-sales tbody').html();
                    $("tbody").html(tbodyHtml);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

</html>