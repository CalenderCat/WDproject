<?php
    $serverName = "localhost";
    $userName = "Cameron";
    $password = "skillsforhire";
    $dbName = "canoeandkayak";

    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
?>