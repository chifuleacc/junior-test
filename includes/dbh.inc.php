<?php

    $dbServerName = "localhost";
    $dbUsername = "david";
    $dbPassword = "admin123";
    $dbName = "db";
    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        echo "Database connection error: " . mysqli_connect_error();
    } 