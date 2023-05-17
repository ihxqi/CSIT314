<?php
include_once("../Controller/fetchTicketPricesCtl.php");

$fetchTicketPrices = new fetchTicketPricesCtl();
$ticket_prices = $fetchTicketPrices->getTickets();
?>
<!doctype html>

<html>

    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie booking</title>
        <link rel ="stylesheet" type="text/css"  href = "../styles.css">
        <link rel="stylesheet" type="text/css" href="../jquery.seat-charts.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../jquery.seat-charts.js"></script>
        <script>
            function passval(){
                var seattype = document.getElementById("seatselection").value;
                console.log('seattype:', seattype);
                localStorage.setItem("seattypes", seattype);

                var movie = document.getElementById("movieselection").value;
                console.log('movie:', movie);
                localStorage.setItem("selectedmovie", movie);            

                var cinema = document.getElementById("cinemaselection").value;
                console.log('cinema:', cinema);
                localStorage.setItem("selectedcinema", cinema);

                var day = document.getElementById("day").value;
                console.log('honolulu:', day);
                localStorage.setItem("selectedday", day);
                
                return true;

        }
        </script>
    </head>
    <body>
        <div class="white-box">
            <section>
                <div class="container1">
                    <div class="logo">
                        <img src="../Images/cinemethologo.jpeg">
                    </div>
        
                    <div class="topnav">
                    <a href="index.html" onclick="logout()">LOG OUT</a>
                        <a href="../Boundary/custProfile.php">PROFILE</a>
                        <a href="../Boundary/eTicket.php">E-TICKETS</a>
                        <a href="../Boundary/userBooking.php">BUY TICKETS</a>
                        <a href="../Boundary/movieListing.php">MOVIES</a>
                    </div>
                </div> 
            </section>
            
            <hr>
            <br><br>

            <section>
                <div class="container">
                    <table style="width:225%;">
                        <tr>
                            <th><h2>Booking selection:</h2></th>
                            <th><h2>Seat selections:</h2></th>
                        </tr>

                        <tr>
                            <td rowspan="2" style="text-align: center;">
                                <div class="selection">
                                    <form id="details" >
                                    <div class="custom-select" style="width:200px;">
                                            <label for="customerselection">Choose the profile:</label>
                                            <select name="customerselection" id="customerselection">
                                                <option value="">Select Profile</option>
                                                <?php foreach ($ticket_prices as $ticket_price) { ?>                                      
                                                    <option value="<?php echo $ticket_price['ticket_id'];?>"><?php echo $ticket_price['ticket_cust_profile'];?>, Price: $<?php echo $ticket_price['ticket_price'];?></option>                                            
                                                    <?php } ?>                                                                                                               
                                            </select>
                                    </div><br><br> 
                                        <div class="custom-select" style="width:200px;">
                                            <label for="movieselection">Choose the movie:</label>
                                            <select name="movieselection" id="movieselection">
                                                <option value="">Select movie</option>
                                                <option value="John Wick: Chapter 4 M18">John Wick: Chapter 4 M18</option>
                                                <option value="Air NC16">Air NC16</option>
                                                <option value="Dungeons & Dragons PG13">Dungeons & Dragons PG13</option>
                                                <option value="Geylang M18">Geylang M18</option>
                                            </select>
                                        </div>

                                        <br><br>
                                
                                        <div class="custom-select" style="width:200px;">
                                            <label for="cinemaselection">Choose the cinema:</label>
                                            <select name="cinemaselection" id="cinemaselection">
                                                <option value="">Select cinema</option>
                                                <option value="Yishun">Yishun</option>
                                                <option value="Clementi">Clementi</option>
                                                <option value="Tengah">Tengah</option>
                                                <option value="Vivocity">Vivocity</option>
                                            </select>
                                        </div>

                                        <br><br>
                                        
                                        <div class="custom-select" style="width:200px;">
                                            <label for="day">Date of:</label>
                                            <select name="day" id="day">
                                                <option value="">Select date</option>
                                                <option value="Today 18 Apr">Today 18 Apr</option>
                                                <option value="19 Apr">19 Apr</option>
                                                <option value="20 Apr">20 Apr</option>
                                                <option value="21 Apr">21 Apr</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <input class="button4" type="submit" value="Submit movie selection" onclick="passval()" >
                                        <br><br>
                                    </form>
                                </div>
                            </td>
                            
                            <td>
                                <div class="wrapper">
                                    <div class="container3">
                                        <div class="row">
                                            <div class="grid-50">
                                                <div id="seat-map" style="visibility: hidden;" >
                                                    <div class="front-indicator">Movie screen</div>
                                                    <br><br>
                                                    <div id="e-movie-seat-map" ></div>
                                                    <p style="margin:0.5em; margin-left: 10%;">End of Seat Row</p>
                                                <!-- <div id="legend"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="wrapper">
                                    <div class="container3">
                                        <div class="row">
                                            <div class="grid-50">
                                                <div class="booking-details">
                                                    <form action="" method="post">                
                                                        <h3> Selected Seats (<span id="counter">0</span>):</h3>
                                                        <ul id="selected-seats"></ul>
                                                
                                                        <button type="button" id="checkout-button">Submit Book</button>                        
                                                    </form>
                                                <button id="reset-btn" type="button">Reset seat selection</button>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div> 
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
        <script src="../script.js"></script>    
    </body>
</html>
