<!--The page an admin role sees-->
<?php 
include 'header.php';
$userInfo = $_SESSION['userInfo'];
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
            <h1>Hello <?=$userInfo['firstname']?> <?=$userInfo['lastname']?> (Admin)</h1>
            <a href="newaccount.php">Create new account</a>
            <a href="notworking.php">My PC isn't working</a>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
<?php include 'footer.php' ?>