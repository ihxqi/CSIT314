<?php
include("../config.php");
include_once("../Controller/getCinemaRoomCtl.php");
include_once("../Controller/updateCinemaRoomCtl.php"); //not sure if this is needed 

if(isset($_POST['update']))
{   
    $roomNo = $_POST['room_no'];
    $capacity = $_POST['room_capacity'];
    $showtime = $_POST['room_showtime'];
    $movieDate = $_POST['room_showdate']; 
    $movieId = $_POST['room_movieid']; 
    

    // checking empty fields
    if(empty($roomNo) || empty($capacity) || empty($showtime) || empty($movieDate) || empty($movieId)) {    
        if(empty($roomNo)) {
            echo "<font color='red'>Room number field is empty!</font><br/>";
        }
        if(empty($capacity)) {
            echo "<font color='red'>Room capacity field is empty!</font><br/>";
        }
        if(empty($showtime)) {
            echo "<font color='red'>Movie show time field is empty!</font><br/>";
        }
        if(empty($movieDate)) {
            echo "<font color='red'>Movie show date field is empty!</font><br/>";
        }
        if(empty($movieId)) {
            echo "<font color='red'>Movie Id field is empty!</font><br/>";
        }

    } else {    
        //updating the table
        require_once('../Controller/updateCinemaRoomCtl.php');
        $ucr = new updateCinemaRoomCtl();
        $result = $ucr->updateCinemaRoom($roomNo, $capacity, $showtime, $movieDate, $movieId);

        if($result){
            header("Location: ../Boundary/manageRoom.php"); //not sure if its the correct page to redirect to
        }
    }
}
?>

<?php
//getting id from url
$roomNo=isset($_GET['room_no']) ? $_GET['room_no'] : die('ERROR: Room not found.');
//selecting data associated with this particular id
$cinemaRoom = new CinemaRoom();
$cinemaRoomData = $cinemaRoom->getCinemaRoom($roomNo);

if(!$cinemaRoomData) { 
    die('ERROR: Room not found.');
}

$roomNo = $cinemaRoomData['room_no'];
$capacity = $cinemaRoomData['room_capacity'];
$showtime = $cinemaRoomData['room_showtime'];
$movieDate = $cinemaRoomData['room_showdate']; 
$movieId = $cinemaRoomData['room_movieid']; 

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
                <div class="panel-heading"><h3>Update Room</h3></div>
                  <div class="panel-body">
                    <form action="updateRoom.php" method="post">
                        <div class="form group">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value=<?php echo $_GET['user_id'];?>>
                            <label for="room_no">Room No.:</label>
                            <input type="int" class="form-control" id="room_no" name="room_no" value="<?php echo $room_no;?>">
                            <br><br>
                            <label for="room_capacity">Capacity: </label>
                            <input type="text" class="form-control" id="room_capacity" name="room_capacity" value="<?php echo $room_capacity;?>">
                            <br><br>
                            <label for="room_movie">Movie:</label>
                            <input type="text" class="form-control" id="room_movieid" name="room_movieid" value="<?php echo $room_movie;?>">
                            <br><br>
                            <label for="room_showtime">Showtime:</label>
                            <input type="text" class="form-control" id="room_showtime" name="room_showtime" value="<?php echo $room_showtime;?>">
                            <br><br>
                            <label for="room_showdate">Showdate:</label>
                            <input type="text" class="form-control" id="room_showdate" name="room_showdate" value="<?php echo $room_showdate;?>">
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