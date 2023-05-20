<!--The page confirming that your email has been sent and for what-->
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
            <?php if($_SESSION['emailType'] == "newaccount") { ?>
                <h1>Email has been sent to create new account</h1>
            <?php } ?>
            <?php if($_SESSION['emailType'] == "lostpass") { ?>
                <h1>Email has been sent to recover your password</h1>
            <?php } ?>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
<?php include 'footer.php' ?>