<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Maheswar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO User (firstname, lastname, email)
VALUES ('Anil', 'Behera', 'anil@example.com');";
$sql .= "INSERT INTO User (firstname, lastname, email)
VALUES ('Jyoti', 'Behera', 'jyoti@example.com');";
$sql .= "INSERT INTO User (firstname, lastname, email)
VALUES ('jee', 'Behera', 'jee@example.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>