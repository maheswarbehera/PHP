<!-- while (condition is true) {
  code to be executed;
} -->

<?php
    $x = 0;

    while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
    }
?>

<!-- PHP 'Break' in while loop-->

<?php
  $x = 0;

  while($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "brake The number is: $x <br>";
    $x++;
  }
?>

<!-- PHP 'Continue' in while loop -->

<?php
  $x = 0;

  while($x < 10) {
    if ($x == 4) {
      $x++;
      continue;
    }
    echo " continue The number is: $x <br>";
    $x++;
  }
?>