<?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);

    // Die if connection was not successful
    if (!$conn) {
        die("Conection Failed".mysqli_connect_error($conn));
    }
    else{
        echo "Connection Successfull <br>";
    }

    // Create a db
    //$sql = "CREATE DATABASE Maheswar";
    $sql = "CREATE DATABASE maheswar";
    $result = mysqli_query($conn, $sql);

    // Check for the database creation success
    if ($result) {
        echo "Database created successfull.<br>";
    } else {
        echo "Database already exists".mysqli_error($conn);
    }

    mysqli_close($conn);
?>

