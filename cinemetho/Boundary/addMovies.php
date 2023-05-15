<html>

<head>
    <title>Cinema Manger - Add Movie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cm_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                        <a href="../Boundary/manageF&b.php">F&B</a>
                        <a class="active" href="cinemaManager.php">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
	<div class="backgroundImage">
		<div class="form-box">
			<h2>Add Movie</h2>
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="login-btn" onclick="addMovie()"><strong>Add Movie</strong></button>
			</div>		
			<h3></h3>
			
			<?php
         ?>
		
		<form method="post" id="addMovie" class="user-input" onsubmit="return checkForm(this);" style="width:50%">
				
			</select>
			<br><br>
			<input type="file" name="movieImage" class="input-field" required style="width:200%; height:10%; border: 1px solid #808080;"><br><br>
			<input type="text" name="movieTitle" class="input-field" placeholder="Movie Title" required><br><br>           
			<input type="text" name="movieGenre" class="input-field" placeholder="Movie Genre" required><br><br>			
			<input type="text" name="movieMPA" class="input-field" placeholder="MPA Rating" required><br><br>		
			<input type="text" name="movieLanguage" class="input-field" placeholder="Movie Language" required><br><br>			
			<input type="int" name="movieDuration" class="input-field" placeholder="Movie Duration" required><br><br>			
			<input type="text" name="movieSynopsis" class="input-field" placeholder="Movie Synopsis" required><br><br>			
			<input type="text" name="movieCast" class="input-field" placeholder="Movie Casts" required><br><br>		
			<input type="text" name="movieDirector" class="input-field" placeholder="Movie Director" required><br><br>		
		
			<input type="submit" name="addMovie" class="submit-btn button3" value="Add Movie">
		</form>
		</div>
	</div>
</div>
	</html>
	<script>
	var y = document.getElementById("addMovie");	
	var z = document.getElementById("btn");
	
	function addMovie()
	{
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

	function addMovieSuccess()
	{
		alert("You have successfully added!")
	}

	function clearForm() 
	{
 		document.getElementById("addMovie").reset();
	}

	
	</script>
</body>
