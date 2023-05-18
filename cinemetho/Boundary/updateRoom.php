<?php
include_once("../Controller/updateRoomCtl.php");

if (isset($_POST['update'])) {
    $roomNo = $_POST['roomNo'];
    $roomCapacity = $_POST['roomCapacity'];
    $movieShowtime = $_POST['movieShowtime'];
    $movieShowDate = $_POST['movieShowDate'];
    $movie_id = $_POST['movie_id'];

    // checking empty fields
    if (empty($roomNo) || empty($roomCapacity) || empty($movieShowtime) || empty($movieShowDate) || empty($movie_id)) {
        // Error handling code
    } else {
        // Updating the table
        $ufnb = new updateRoomCtl();
        $result = $ufnb->updateRoom($roomNo, $roomCapacity,$movieShowtime, $movieShowDate, $movie_id);

        if ($result) {
            header("Location: ../Boundary/manageRoom.php");
            exit();
        }
    }
}
$roomNo = isset($_GET['roomNo']) ? $_GET['roomNo'] : die('ERROR: roomNo not found.');
$roomCapacity = isset($_GET['roomCapacity']) ? $_GET['roomCapacity'] : die('ERROR: roomCapacity not found.');
$movieShowtime = isset($_GET['movieShowtime']) ? $_GET['movieShowtime'] : die('ERROR: movieShowtime not found.');
$movieShowDate = isset($_GET['movieShowDate']) ? $_GET['movieShowDate'] : die('ERROR: movieShowDate not found.');
$movie_id = isset($_GET['movie_id']) ? $_GET['movie_id'] : die('ERROR: movie_id not found.');
// Selecting data associated with this particular id

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
                    <h2>Room Information</h2>
                    <hr color="orange">
                    <a href='manageRoom.php' class='btn btn-warning btn-round'>Back</a>
                    <br>
                    <div class="col-md-12">


                        <div class="panel panel-success panel-size-custom">
                            <div class="panel-heading">
                                <h3>Update Food</h3>
                            </div>
                            <div class="panel-body">
                                <form action="updateRoom.php" method="post">
                                    <div class="form group">
                                        <input type="hidden" class="form-control" id="roomNo" name="roomNo" value="<?php echo $roomNo; ?>">
                                        <br><br>
                                        <label for="roomCapacity">Room Capacity:</label>
                                        <input type="text" class="form-control" id="roomCapacity" name="roomCapacity" value="<?php echo $roomCapacity; ?>">
                                        <br><br>
                                        <label for="movieShowtime">Showtime: </label>
                                        <input type="text" class="form-control" id="movieShowtime" name="movieShowtime" value="<?php echo $movieShowtime; ?>">
                                        <br><br>
                                        <label for="movieShowDate">Showdate:</label>
                                        <input type="int" class="form-control" id="movieShowDate" name="movieShowDate" value="<?php echo $movieShowDate; ?>">
                                        <br><br>
                                        <label for="movie_id">Movie ID:</label>
                                        <input type="int" class="form-control" id="movie_id" name="movie_id" value="<?php echo $movie_id; ?>">
                                    </div>
                                    <br>
                                    <div class="form group">
                                        <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                                            <i class="now-ui-icons ui-1_check"></i> Update Room
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