<?php
// including the database connection file
include("../config.php");
include_once("../Controller/getUserAccountByIDCtl.php"); //to change this pathing

if(isset($_POST['update']))
{      
    $room_no = $_POST['room_no'];
    $room_capacity = $_POST['room_capacity'];
    $room_movie = $_POST['room_movie']; 
    $room_showtime = $_POST['room_showtime']; 
    $room_showdate = $_POST['room_showdate']; 
    

    // checking empty fields
    if(empty($room_no) || empty($room_capacity) || empty($room_movie) || empty($room_showtime) || empty($room_showdate)) {    
        if(empty($room_no)) {
            echo "<font color='red'>Room No. field is empty!</font><br/>";
        }
        if(empty($room_capacity)) {
            echo "<font color='red'>Capacity field is empty!</font><br/>";
        }
        if(empty($room_movie)) {
            echo "<font color='red'>Movie field is empty!</font><br/>";
        }
        if(empty($room_showtime)) {
            echo "<font color='red'>Showtime field is empty!</font><br/>";
        }
        if(empty($room_showdate)) {
            echo "<font color='red'>Showdate field is empty!</font><br/>";
        }

    } else {    
        //updating the table
        require_once('../Controller/updateUserAccountCtl.php'); //change this pathing
        $userCtl = new updateUserAccountCtl();//change this pathing
        $result = $userCtl->updateRoom($room_no, $room_capacity, $room_movie, $room_showtime, $room_showdate);//change this pathing

        if($result){
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/manageRoom.php"); 
        }
    }
}
?>

<?php
//getting id from url
$id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$userAccount = new UserAccount(); // need to change 
$userAccountData = $userAccount->getUserAccountByID($id); // need to change 

if(!$userAccountData) { // need to change 
    die('ERROR: Record not found.');
}

$room_no = $userAccountData['room_no']; // need to change 
$room_capacity = $userAccountData['room_capacity']; // need to change 
$room_movie = $userAccountData['room_movie']; // need to change 
$room_showtime = $userAccountData['room_showtime']; // need to change 
$room_showdate = $userAccountData['room_showdate']; // need to change 
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
                            <input type="text" class="form-control" id="room_movie" name="room_movie" value="<?php echo $room_movie;?>">
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