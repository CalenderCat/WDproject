<?php 
include 'header.php';
include 'connect.php';
if(count($_POST) > 0) {
    if($_POST['heading'] == "") {
        $headingError = "error";
    }
    if($_POST['date'] == "") {
        $dateError = "error";
    }
    if($_POST['duration'] == "") {
        $durationError = "error";
    }
    if($_POST['summary'] == "") {
        $summaryError = "error";
    }
    if(!isset($headingError) && !isset($dateError) && !isset($durationError) && !isset($summaryError)) {
        $heading = $_POST['heading'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];
        $summary = $_POST['summary'];

        $statment = $connection->prepare("INSERT INTO trips (heading, tripDate, duration, summary) VALUES (:heading, :tripDate, :duration, :summary)");
        $statment->bindParam(':heading', $heading);
        $statment->bindParam(':tripDate', $date);
        $statment->bindParam(':duration', $duration);
        $statment->bindParam(':summary', $summary);
        $statment->execute();
        $done = true;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        <main>
            <p class="pagehead">Add an adventure!</p>
            <form class="input" method="post" action="booking.php">
                <label class ="labels" for="heading">Adventure heading:</label>
                <input type="text" class="fields <?=$headingError?>" id="heaing" name="heading"/>
                <label class ="labels" for="date">Trip date:</label>
                <input type="date" class="fields <?=$dateError?>" id="date" name="date"/>
                <label class="labels" for="duration">Trip duration:</label>
                <input type="text" class="fields <?=$durationError?>" id="duration" name="duration"/>
                <label class="labels" for="summary">Trip description:</label>
                <textarea class="fields <?=$summaryError?>" id="summary" name="summary"></textarea>
                <input class="button" type="submit"/>
            </form>
            <?php
            if(isset($done)) { ?>
                <p>Adventure has been added successfully</p>
                <a class="" href="index.php">Click here to view all adventures</a>
            <?php }
            ?>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
<?php include 'footer.php' ?>