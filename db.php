<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "Lipa@123";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
