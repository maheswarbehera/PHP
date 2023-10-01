<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["username"] = "Maheswar";
$_SESSION["catagory"] = "Mobile";
echo "Session variables are set.";
?>

</body>
</html>