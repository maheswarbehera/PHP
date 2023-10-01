
<?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="Maheswar";
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password,$database);

    // Die if connection was not successful
    if (!$conn) {
        die("Conection Failed".mysqli_connect_error($conn));
    }
    else{
        echo "connected <br>";
    }

    // Delete a db
    //$sql = "DELETE FROM form WHERE id BETWEEN 2 AND 10";
    //$sql = "DELETE FROM contact ";
    //$sql = "DROP DATABASE mydb";
    $sql = "DELETE FROM form WHERE `Email` ='admin3@gmail.com'";
    $result = mysqli_query($conn, $sql);

    $affected = mysqli_affected_rows($conn);
    echo " No of rows affected $affected <br>";
    // Check for the database creation success
    if ($result) {
        echo "Data deleted successfull.<br>";
    } else {
        $error = mysqli_error($conn);
        echo "Not deleted Data due do thid error-->$error";
    }

?>

