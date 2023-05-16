<?php

class DisplayFnB
{
    function displayFnB()
    {
        echo '
        <html>

<head>
    <title>Cinema Manager - F&B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    <a href="../Boundary/manageTickets.php">TICKETS</a> <!-- need change -->
                    <a href="../Boundary/manageCinemaRooms.php">CINEMA ROOMS</a> <!-- need change -->
                    <a href="../Boundary/manageMovies.php">MOVIES</a>
                    <a href="../Boundary/manageFnb.php">F&B</a>
                    <a class="active" href="cinemaManager.php">HOME</a> <!-- need change -->
                </div>
            </div>
        </section>
        <hr>
        <br>
        <br>
        <div class="container1" style="margin-top: -3%; margin-bottom: 3%; ">
            <div class="search">
                <input type="text" class="searchTerm" id="search" placeholder="Search by Combo Name">
                </button>
            </div>
            <div class="white-box">
            <div class="topnav" style="margin-top: -2%;">
                <a onclick="location.href=\'addFnB.php\';" style="margin-left: 5%;">
                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Food
                </a>
            </div>
        </div>

        <table id="foodTable" class="CMtable" style="width:100%">
            <tr>
                <th>Combo ID</th>
                <th>Combo Name</th>
                <th>Combo Image</th>
                <th>Combo Price</th>
                <th>Combo Quantity</th>
                <th>Combo Status</th>
            </tr>';

        include_once("../Controller/getFnBCtl.php");
        //include_once("../Controller/addFnBCtl.php");
        //include_once("../Controller/updateFnBCtl.php");
        include_once("../Controller/suspendFnBCtl.php");


        $FnBCtl = new getFnBCtl();
        $fnbCombos = $FnBCtl->getFnB();

        foreach ($fnbCombos as $fnbCombo) {
            echo "<tr class='border-bottom'>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboID'] . "</td>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboName'] . "</td>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboImg'] . "</td>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboPrice'] . "</td>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboQuantity'] . "</td>";
            echo "<td style='padding: 30px;'>" . $fnbCombo['comboStatus'] . "</td>";
            echo "<td><td><td><td><td><td>";

            echo "<td><a href='updateFnB.php?comboID={$fnbCombo['comboID']}&comboName={$fnbCombo['comboName']}&comboImg={$fnbCombo['comboImg']}&comboPrice={$fnbCombo['comboPrice']}&comboQuantity={$fnbCombo['comboQuantity']}'\" class='button'>Update</a> |";
            echo "<a href=\"suspendFnB.php?ComboID={$fnbCombo['comboID']}\" onClick=\"return confirm('Are you sure you want to suspend?')\" class='button'>Suspend</a> |";
            echo "<a href=\"activateFnB.php?ComboID={$fnbCombo['comboID']}\" onClick=\"return confirm('Are you sure you want to activate?')\" class='button'>Activate</a></td>";
            echo "</tr>";
        }

        echo '
        </table>
        <br>
        <br>
    </div>
    </body>
    </html>';
    }
}

$boundary = new DisplayFnB();
$boundary->displayFnB();


//$userAccountCtl = new suspendUserProfile($user_profile);
//$userProfiles = $userAccountCtl->suspendUserProfile($user_profile);
?>




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