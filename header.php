<!--The header page-->
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
        <!--Header bar in the header-->
        <header class="nav-bar">
            <img src="hamburger.png" id="hamburger" alt="Site Menu" width="50px" height="50px">
            <h1>Halifax Canoe and Kayak</h1>
            <img src="paddle-white.png" id="logo" alt="Logo" width="50px" height="50px">
        </header>
        <!--The navigation menu with non fuctioning links other then Home-->
        <nav class="link-list">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="booking.html">Book a Trip</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
        <body>
            <a class="logout" href="logout.php">Log Out</a>
            <p class="pagehead">Halifax Canoe and Kayak Tech Help</P>
        </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="script.js"></script>
</html>