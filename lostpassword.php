<!--The page looking for an email for lost password-->
<?php 
include 'header.php';
$userInfo = $_SESSION['userInfo'];
if(isset($_POST['submit'])) {
    if($_POST['email'] != "") {
        $_SESSION['emailType'] = "lostpass"; ?>
        <script>window.location.href = "emailsent.php";</script>
    <?php }
}
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
            <form class="input" method="post" action="lostpassword.php">
                <h2>Please enter the email for the password recovery:</h2>
                <label for="email">Enter emial address:</label>
                <input type="text" id="email" name="email"/>
                <input class="button" type="submit" name="submit"/>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</html>
<?php include 'footer.php' ?>