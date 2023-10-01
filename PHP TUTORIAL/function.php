<?php


function Student($resultarray){
    $x=0;
    foreach ($resultarray as $value) {
        $x += $value;        
    }
    return $x;    
}


function avg($resultarray){
    $x=0;
    $a=1;
    foreach ($resultarray as $value) {
        $x += $value;   
        $a++;     
    }
    return $x/$a;    
}

$maheswar = [56, 65, 76, 88, 76,89];
// $totalResult = Student($maheswar);
$totalResult = avg($maheswar);

echo "the total mark of maheswar out of 600 is $totalResult" ."<br>";   

?>

<!-- <!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> -->


<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

