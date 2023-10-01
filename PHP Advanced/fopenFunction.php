<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("index.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("index.txt"));
// echo fgets($myfile);
// echo fgetc($myfile);

// while(!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
//   }

while(!feof($myfile)) {
    echo fgetc($myfile) ;
  }
fclose($myfile);
?>

</body>
</html>