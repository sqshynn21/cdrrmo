<?php

include_once("includes/conn.php");



if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $address = $_POST['address'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];


    $sql = "INSERT INTO `location`(`address`, `lat`, `long`, `name`) VALUES ('$address','$lat','$long', '$name')";

    $conn->query($sql) or die($conn->error);

    echo header("Location: home.php");
}
?>