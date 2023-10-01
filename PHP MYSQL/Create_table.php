<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "maheswar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

// sql to create table
// $sql = "CREATE TABLE User (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

//$sql = "CREATE TABLE log (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,logemail VARCHAR(30) ,logpass VARCHAR(30) )";
$sql = "CREATE TABLE notes (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY  ,Name VARCHAR(30))";

if (mysqli_query($conn, $sql)) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>