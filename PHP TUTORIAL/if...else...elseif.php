<!-- if (condition) {
    code to be executed if condition is true;
} -->
    <?php
    $age = 20;
        if ($age > 18) {
            echo "You are eligile to vote now. <br>";
        }
    ?>

<!-- if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
} -->
    <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day! <br>";
        } else {
        echo "Have a good night! <br>";
        }
    ?>
<!-- if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
} -->

    <?php
        $age = 20;
        if($age >= 18){
        echo "You are eligible to drive. <br>";
        }
        elseif($age <= 50){
        echo "You are also eligible to drive. <br>";
        }
        else{
        echo"You are not eligible to drive. <br>";
        }
    ?>