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

// $sql = "INSERT INTO log (logemail, logpass)
// VALUES ('abc@gmail.com', 'Maheswar@123')";
   $sql = "INSERT INTO `notes` (`slno`, `title`, `description`, `date`) VALUES (NULL, 'hii', 'hi', current_timestamp());";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>