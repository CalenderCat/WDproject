<!--The page with no HTML, just redirects based on forms entered-->
<?php 
include 'header.php';
$userInfo = $_SESSION['userInfo'];
if($userInfo['job'] == "Admin") { ?>
    <script>window.location.href = "admin.php";</script>
<?php }
elseif($userInfo['job'] == "Manager") { ?>
    <script>window.location.href = "manager.php";</script>
<?php }
else { ?>
    <script>window.location.href = "CEO.php";</script>
<?php }
?>