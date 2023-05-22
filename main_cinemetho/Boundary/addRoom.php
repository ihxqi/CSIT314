<?php
include_once("../Controller/addRoomCtl.php");

$e1 = "";
$e2 = "";
$e3 = "";
$e4 = "";
$e5 = "";


if (isset($_POST["addRoom"])) {

    // $roomNo = $_POST["room__no"];
    $roomCapacity = $_POST["room_capacity"];
    $movie_id = $_POST["room_movieid"];
    $movieShowtime = $_POST["room_showtime"];
    $movieShowDate = $_POST["room_showdate"];

    //validateTicketId($e1);
    // validateRoomNo($e1);
    validateRoomCapacity($e2);
    validateMovieId($e3);
    validateMovieShowtime($e4);
    validateMovieShowDate($e5);

    if (empty($e2) && empty($e3) && empty($e4) && empty($e5)) {
        $aRc = new addRoomCtl();
        $results = $aRc->addRoom($roomCapacity, $movieShowtime, $movieShowDate, $movie_id);
    }
}


// function validateRoomNo(&$e1)
// {
//     global $roomNo;
//     $roomNo = trim($_POST["room__no"]);
//     if (empty($roomNo)) {
//         $e1 = "Please fill in room number";
//     }
// }

function validateRoomCapacity(&$e2)
{
    global $roomCapacity;
    $roomCapacity = trim($_POST["room_capacity"]);
    if (empty($roomCapacity)) {
        $e2 = "Please fill in room capacity";
    }
}

function validateMovieId(&$e3)
{
    global $movie_id;
    $movie_id = trim($_POST["room_movieid"]);
    if (empty($movie_id)) {
        $e3 = "Please fill in movie Id";
    }
}

function validateMovieShowtime(&$e4)
{
    global $movieShowtime;
    $movieShowtime = trim($_POST["room_showtime"]);
    if (empty($movieShowtime)) {
        $e4 = "Please fill in movie showtime";
    }
}

function validateMovieShowDate(&$e5)
{
    global $movieShowDate;
    $movieShowDate = trim($_POST["room_showdate"]);
    if (empty($movieShowDate)) {
        $e5 = "Please fill in movie show date";
    }
}

?>

<html>

<head>
    <title>Cinema Manger - Add Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../cm_style.css">
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
        <h2>Add Room:</h2>
        <?php
        ?>

        <form method="post" id="addRoom" class="user-input" onsubmit="return checkForm(this);" style="width:50%">

            </select>
            <br><br>
            <label>Room capacity:</label>
            <input type="text" name="room_capacity" class="input-field" placeholder="Room Capacity" required><br><br>
            <label>Room movie:</label>
            <input type="text" name="room_movieid" class="input-field" placeholder="Room Movie" required><br><br>
            <label>Room showtime:</label>
            <input type="text" name="room_showtime" class="input-field" placeholder="Room Showtime" required><br><br>
            <label>Room showdate:</label>
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

    function addRoom() {
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

    function addRoomSuccess() {
        alert("You have successfully added!")
    }

    function clearForm() {
        document.getElementById("addRoom").reset();
    }
</script>
</body>