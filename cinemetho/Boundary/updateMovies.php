<?php
// including the database connection file
include("../config.php");
include_once("../Controller/getUserAccountByIDCtl.php"); //to change this pathing

if(isset($_POST['update']))
{      
    $movie_id = $_POST['movie_id'];
    $movie_title = $_POST['movie_title'];
    $movie_synopsis = $_POST['movie_synopsis'];
    $movie_genre = $_POST['movie_genre'];
    $movie_language = $_POST['movie_language'];
    $movie_duration = $_POST['movie_duration'];
    $mpa_rating = $_POST['mpa_rating'];
    $movie_image = $_POST['movie_image'];
    $movie_cast = $_POST['movie_cast'];
    $movie_director = $_POST['movie_director'];

    // checking empty fields
    if(empty($movie_id) || empty($movie_title) || empty($movie_synopsis) || empty($movie_genre) || empty($movie_language) || empty($movie_duration) || empty($mpa_rating) || empty($movie_image) || empty($movie_cast) || empty($movie_director)) {    
        if(empty($movie_id)) {
            echo "<font color='red'>Movie Id field is empty!</font><br/>";
        }
        if(empty($movie_title)) {
            echo "<font color='red'>Title field is empty!</font><br/>";
        }
        if(empty($movie_synopsis)) {
            echo "<font color='red'>Synopsis field is empty!</font><br/>";
        }
        if(empty($movie_genre)) {
            echo "<font color='red'>Genre field is empty!</font><br/>";
        }
        if(empty($movie_language)) {
            echo "<font color='red'>Language field is empty!</font><br/>";
        }
        if(empty($movie_duration)) {
            echo "<font color='red'>Duration field is empty!</font><br/>";
        }
        if(empty($mpa_rating)) {
            echo "<font color='red'>MPA Rating field is empty!</font><br/>";
        }
        if(empty($movie_image)) {
            echo "<font color='red'>Image field is empty!</font><br/>";
        }
        if(empty($movie_cast)) {
            echo "<font color='red'>Cast field is empty!</font><br/>";
        }
        if(empty($movie_director)) {
            echo "<font color='red'>Director field is empty!</font><br/>";
        }       

    } else {    
        //updating the table
        require_once('../Controller/updateUserAccountCtl.php'); //change this pathing
        $userCtl = new updateUserAccountCtl();//change this pathing
        $result = $userCtl->updateMovies($movie_id, $movie_title, $movie_synopsis, $movie_genre, $movie_language, $movie_duration, $mpa_rating, $movie_image, $movie_cast, $movie_director);//change this pathing

        if($result){
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../Boundary/manageMovies.php"); 
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

$movie_id = $userAccountData['movie_id'];
$movie_title = $userAccountData['movie_title'];
$movie_synopsis = $userAccountData['movie_synopsis'];
$movie_genre = $userAccountData['movie_genre'];
$movie_language = $userAccountData['movie_language'];
$movie_duration = $userAccountData['movie_duration'];
$mpa_rating = $userAccountData['movie_rating'];
$movie_image = $userAccountData['movie_image'];
$movie_cast = $userAccountData['movie_cast'];
$movie_director = $userAccountData['movie_director'];
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
                      <h2>Movie Information</h2>
                      <hr color="orange">
                      <a href='manageMovies.php' class='btn btn-warning btn-round'>Back</a> 
                <br>
                <div class="col-md-12">
      

            <div class="panel panel-success panel-size-custom">
                <div class="panel-heading"><h2>Update Movie</h2></div>
                  <div class="panel-body">
                  <form action="updateMovies.php" method="post" enctype="multipart/form-data">
                        <div class="form group">
                            <label for="movie_id">Movie ID:</label>
                            <input type="int" class="form-control" id="movie_id" name="movie_id" value="<?php echo $movie_id;?>">
                            <br><br>
                            <label for="movie_title">Movie Title:</label>
                            <input type="text" class="form-control" id="movie_title" name="movie_title" value="<?php echo $movie_title;?>">
                            <br><br>
                            <label for="movie_synopsis">Movie Synopsis:</label>
                            <textarea class="form-control" id="movie_synopsis" name="movie_synopsis"><?php echo $movie_synopsis;?></textarea>
                            <br><br>
                            <label for="movie_genre">Movie Genre:</label>
                            <input type="text" class="form-control" id="movie_genre" name="movie_genre" value="<?php echo $movie_genre;?>">
                            <br><br>
                            <label for="movie_language">Movie Language:</label>
                            <input type="text" class="form-control" id="movie_language" name="movie_language" value="<?php echo $movie_language;?>">
                            <br><br>
                            <label for="movie_duration">Movie Duration:</label>
                            <input type="int" class="form-control" id="movie_duration" name="movie_duration" value="<?php echo $movie_duration;?>">
                            <br><br>
                            <label for="mpa_rating">MPA Rating:</label>
                            <input type="text" class="form-control" id="mpa_rating" name="mpa_rating" value="<?php echo $mpa_rating;?>">
                            <br><br>
                            <label for="movie_image">Movie Image:</label>
                            <input type="file" class="form-control" id="movie_image" name="movie_image" value="<?php echo $movie_image;?>">
                            <br><br>
                            <label for="movie_cast">Movie Cast:</label>
                            <input type="text" class="form-control" id="movie_cast" name="movie_cast" value="<?php echo $movie_cast;?>">
                            <br><br>
                            <label for="movie_director">Movie Director:</label>
                            <input type="text" class="form-control" id="movie_director" name="movie_director" value="<?php echo $movie_director;?>">

                        <br>
                        <div class="form group">
                            <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                            <i class="now-ui-icons ui-1_check"></i> Update Movie
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