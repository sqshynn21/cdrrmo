<?php 
function connection(){

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "sc";
    
    $conn = new mysqli($host, $username, $password, $database);
    
    if($conn->connect_error){
        echo $conn->connect_error;
    }
    else{
        return $conn;

    }
}
