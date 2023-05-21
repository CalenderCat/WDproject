<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style></style>
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>       
        <header class="nav-bar">
            <img src="hamburger.png" id="hamburger" alt="Site Menu" width="50px" height="50px">
            <h1>Halifax Canoe and Kayak</h1>
            <img src="paddle-white.png" id="logo" alt="Logo" width="50px" height="50px">
        </header>
        <nav class="link-list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                if(isset($_SESSION['loggedin'])) {
                    if($_SESSION['loggedin'] == true) {
                        if($_SESSION['userInfo']['job'] == 'Admin') { ?>
                            <li><a href="admin.php">Menu (Admin)</a></li>
                        <?php }
                        else if($_SESSION['userInfo']['job'] == 'Manager') { ?>
                            <li><a href="manager.php">Menu (Manager)</a></li>
                        <?php }
                        else { ?>
                            <li><a href="CEO.php">Menu (CEO)</a></li>
                        <?php }
                    }
                }
                if(!isset($_SESSION['loggedin'])) { ?>
                    <li><a href="login.php">Login</a></li>
                <?php }  ?>
            </ul>
        </nav>
        <body>
            <?php
                if(isset($_SESSION['loggedin'])) {
                    if($_SESSION['loggedin'] == true) { ?>
                        <a class="logout" href="logout.php">Log Out</a>
                <?php } 
                } ?>
        </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="script.js"></script>
</html>