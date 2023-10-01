<?php
session_start();
if(isset($_SESSION["username"])){
    echo "Welcome ".$_SESSION["username"] ."<br>";
    echo "Your catagory is ".$_SESSION["catagory"];
}
else{
    echo "Please log in to continue.";
}
?>

