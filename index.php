<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style></style>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <!--Header bar in the header-->
        <header class="nav-bar">
            <img src="hamburger.png" id="hamburger" alt="Site Menu" width="50px" height="50px">
            <h1>Halifax Canoe and Kayak</h1>
            <img src="paddle-white.png" id="logo" alt="Logo" width="50px" height="50px">
        </header>
        <!--The navigation menu with non fuctioning links other then Home-->
        <nav class="link-list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.html">Book a Trip</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <main>
            <div class="main-content">
                <!--The banner class is for the image part of the content-->
                <div class="banner">
                    <img src="canoe.jpg" alt="Canoe">
                    <p>Come Experience Canada</p>
                </div>
                <!--The text content of the page-->
                <h2 class="main-content-header">Upcoming Adventures</h2>
                <h3 class="content-header">Canoe in twos:</h3>
                <p class="date-time">Where: Cape Breton<br>When: April 22 2023</p>
                <p class="content">Join us for a couples quiet and peaceful journey along the lakes of Cape Breton. We will take you along the coasts to see incredible views and memories that will last forever. It will surely “Breton” your day.
                </p>
                <h3 class="content-header">Kayak with lilacs:</h3>
                <p class="date-time">Where: Yarmouth<br>When: June 2 2023</p>
                <p class="content">This excursion takes place in Yarmouth, and is designed for individuals who want to embark on an adventurous journey as a part of a group. It will provide incredible views of wildlife and flowers that can only be appreciated in person. The sights are sure to make “Yarmouth” drop in awe.</p>
                
            </div>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>