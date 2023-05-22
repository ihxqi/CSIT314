<?php
include_once("../Controller/getFnBCtl.php");
include_once("../Controller/suspendFnBCtl.php");
include_once("../Controller/searchFnBCtl.php");

$FnBCtl = new getFnBCtl();
$fnbCombos = $FnBCtl->getFnB();

$searchCtl = new searchFnBCtl();

if (isset($_POST['search'])) {
	$search = $_POST['search'];
	if (!empty($search)) {
		$fnbCombos = $searchCtl->searchFnB($search);
	} else {
		// If search field is empty, retrieve all tickets
		$fnbCombos = $FnBCtl->getFnB();
	}
} else {
	// If search field is not set, retrieve all tickets
	$fnbCombos = $FnBCtl->getFnB();
}
?>

<html>

<head>
    <title>Cinema Manager - F&B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
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
                    <a href="../Boundary/manageTicket.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageRoom.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnB.php">F&B</a>
                    <a class="active" href="cinemaManager.php">HOME</a> 


                </div>
            </div>
        </section>
        <hr>
        <br>
        <br>
        <div class="container1" style="margin-top: -4%;">
        <div class="search">
				<form method="POST">
					<div class="search">
						<form method="POST">
							<div class="search-bar">
								<input type="text" class="searchTerm" name="search" placeholder="Search by Name" style="height:100%; width:80%; margin-top: -5%;">
								<button type="submit" class="searchButton" style="margin-top: -5%;">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>
				</form>
			</div>
            <div class="white-box">
                <div class="topnav" style="margin-top: 1%;">
                    <a1 onclick="location.href='addFnB.php';" style="margin-left: 5%;">
                        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Food
                    </a1>
                </div>
            </div>
        </div>

        <table id="foodTable" class="CMtable" style="font-size: 11.5px;">
            <tr>
                <th style="font-size: 11.5px;">Combo ID</th>
                <th style="font-size: 11.5px;">Combo Name</th>
                <th style="font-size: 11.5px;">Combo Image</th>
                <th style="font-size: 11.5px;">Combo Price</th>
                <th style="font-size: 11.5px;">Combo Quantity</th>
                <th style="font-size: 11.5px;">Combo Status</th>
                <th style="font-size: 11.5px;">Actions</th>
            </tr>

            <?php
            foreach ($fnbCombos as $fnbCombo) {
                echo "<tr class='border-bottom'>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboID'] . "</td>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboName'] . "</td>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboImg'] . "</td>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboPrice'] . "</td>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboQuantity'] . "</td>";
                echo "<td style='padding: 30px;'>" . $fnbCombo['comboStatus'] . "</td>";
                echo "<td>
                            <a href='updateFnB.php?comboID={$fnbCombo['comboID']}&comboName={$fnbCombo['comboName']}&comboImg={$fnbCombo['comboImg']}&comboPrice={$fnbCombo['comboPrice']}&comboQuantity={$fnbCombo['comboQuantity']}'>Update</a> |
                            <a href='suspendFnB.php?ComboID={$fnbCombo['comboID']}' onClick=\"return confirm('Are you sure you want to suspend?')\">Suspend</a> |
                            <a href='activateFnB.php?ComboID={$fnbCombo['comboID']}' onClick=\"return confirm('Are you sure you want to activate?')\">Activate</a>
                          </td>";
                echo "</tr>";
            }
            ?>

        </table>
        <br>
        <br>
    </div>
</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('search').addEventListener('input', function(e) {
            var searchVal = e.target.value.toLowerCase();
            var table = document.getElementById('foodTable');

            for (var i = 1, row; row = table.rows[i]; i++) {
                var food = row.cells[1].innerText;

                if (food.toLowerCase().includes(searchVal)) {
                    row.style.display = "";
                } else {
                    row.style.display = ('none');
                }
            }
        });
    });


    function logout() {
        console.log("Logged out");
        window.location.href = 'index.html';
    }
</script>

</html>