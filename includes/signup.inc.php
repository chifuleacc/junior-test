<?php

    include_once 'dbh.inc.php';

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $producType = $_POST['productType'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];


    $sql = "INSERT INTO productdb (sku, name, price, productType, size, height, width, length, weight) 
    VALUES ('$sku', '$name', '$price', '$productType', '$size', '$height', '$width', '$length', '$weight');";

    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=succes");