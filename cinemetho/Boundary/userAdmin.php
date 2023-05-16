<?php
include_once("../Controller/getUserProfileCtl.php");
include_once("../Controller/suspendUserProfileCtl.php");

$userProfileCtl = new getUserProfiles();
$userProfiles = $userProfileCtl->getUserProfiles();

//$userAccountCtl = new suspendUserProfile($user_profile);
//$userProfiles = $userAccountCtl->suspendUserProfile($user_profile);

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>



<!DOCTYPE html>
<html>

<head>
    <title>User Admin - Profile Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../ua_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,800;1,100;1,400&display=swap" rel="stylesheet">
</head>
<div class="white-box">
    <section>
        <div class="container1">
            <div class="logo">
                <img src="../Images/cinemethologo.jpeg">
            </div>
            <div class="topnav">
                <a href="index.php" onclick="logout()">LOG OUT</a>
                <a href="userAdmin.php">PROFILE</a>
                <a href="manageUser.php">USER</a>
            </div>
        </div>
    </section>
    <hr>
    <br>
    <br>
    <div class="container1" style="margin-top: -3%; margin-bottom: 3%; ">
        <div class="search">
            <input type="text" class="searchTerm" id="search" placeholder="Search by Profile">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="topnav" style="margin-top: 1%;">
            <a1 onclick="location.href='addUserProfile.php'" style="margin-left: 5%;">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Profile
            </a1>
        </div>
    </div>
    <table id="profileTable" class="CMtable" style="width:100%">
        <tr>
            <th>User Profile</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        <?php foreach ($userProfiles as $userprofile) { ?>
            <tr>
                <td contenteditable="true" id="profileTable" class="CMtable"><?php echo is_array($userprofile) ? $userprofile['upName'] : $userprofile; ?></td>
                <td contenteditable="true" id="profileTable" class="CMtable"><?php echo is_array($userprofile) ? $userprofile['profile_status'] : $userprofile; ?></td>
                <td>
                    <a href="updateUserProfile.php?userProfile_ID=<?php echo $userprofile['userProfile_ID']; ?>&upName=<?php echo $userprofile['upName']; ?>">Update</a> |
                    <a href="suspendUserProfile.php?userProfile_ID=<?php echo $userprofile['userProfile_ID']; ?>" onClick="return confirm('Are you sure you want to suspend?')">Suspend</a> |
                    <a href="activateUserProfile.php?userProfile_ID=<?php echo $userprofile['userProfile_ID']; ?>" onClick="return confirm('Are you sure you want to activate?')">Activate</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        updateToggleSwitchListeners();

        document.getElementById('search').addEventListener('input', function(e) {
            var searchVal = e.target.value.toLowerCase();
            var table = document.getElementById('profileTable');

            for (var i = 1, row; row = table.rows[i]; i++) {
                var profile = row.cells[0].innerText;

                if (profile.toLowerCase().includes(searchVal)) {
                    row.style.display = "";
                } else {
                    row.style.display = ('none');
                }
            }
        });
    });

    document.getElementById('search').addEventListener('input', function(e) {
        var searchVal = e.target.value.toLowerCase();
        var table = document.getElementById('profileTable');

        for (var i = 1, row; row = table.rows[i]; i++) {
            var profile = row.cells[0].innerText;

            if (profile.toLowerCase().includes(searchVal)) {
                row.style.display = "";
            } else {
                row.style.display = ('none');
            }
        }
    });



    function setRowEditable(row, editable) {
        for (var i = 0; i < row.cells.length; i++) {
            if (i !== row.cells.length - 1) {
                row.cells[i].contentEditable = editable ? "true" : "false";
            }
        }
    }

    function updateProfile() {
        var table = document.getElementById('profileTable');
        for (var i = 1, row; row = table.rows[i]; i++) {
            var profile = row.cells[0].innerText;
            console.log('Profile: ' + profile);
        }

        alert("You have successfully updated!");
    }

    function logout() {
        console.log("Logged out");
        window.location.href = 'index.html';
    }
</script>
</body>

</html>