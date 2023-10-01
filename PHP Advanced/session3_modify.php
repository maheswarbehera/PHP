<?php
session_start();
// to change a session variable, just overwrite it
$modify=  $_SESSION["catagory"] = "Laptop";
echo "$modify";
?>

</body>
</html>