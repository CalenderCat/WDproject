<?php
    include 'header.php';
    include 'connect.php';
    $sql = "SELECT heading, tripDate, duration, summary FROM trips ORDER BY tripDate" ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <style></style>
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        <main>
            <div class="main-content">
                <div class="banner">
                    <img src="canoe.jpg" alt="Canoe">
                    <p>Come Experience Canada</p>
                </div>
                <h2 class="main-content-header">Upcoming Adventures</h2>
                <?php
                    foreach($connection->query($sql) as $row) { ?>
                        <h3 class="content-header"><?php print $row["heading"] ?></h3>
                        <p class="date-time">Date: <?php print $row["tripDate"] ?><br> Duration: <?php print $row["duration"] ?> days</p>
                        <p class="content"><?php print $row["summary"] ?></p>
                    <?php }
                    ?>
            </div>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
<?php include 'footer.php' ?>