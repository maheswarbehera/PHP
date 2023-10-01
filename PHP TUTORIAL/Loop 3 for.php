<!-- for (initialization ; condition; increment counter) {
  code to be executed for each iteration;
} -->

<?php
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
    }
?>

<!-- PHP 'Break' in for loop-->

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "Break The number is: $x <br>";
}
?>

<!-- PHP 'Continue' in for loop-->

<?php
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "Continue The number is: $x <br>";
}
?>

<!-- PHP Nested loop-->
<?php
    for ($a =1; $a<=100; $a+=10){     
      for($b=$a; $b <$a+10; $b++){
        echo $b." ";
      }
      echo '<br>';
    }

?>