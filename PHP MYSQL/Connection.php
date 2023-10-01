<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn){
        die("Conection Failed" .mysqli_connect_error()); 
    }
    else {
        echo "Connection Successful.";
    }
?>