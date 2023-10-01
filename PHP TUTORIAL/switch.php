<!-- switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
} -->

    <?php
        $day = "8";
        switch($day) {
        case 1 :
            echo "Monday";
            break;
        case 2 :
            echo "Tuesday";
            break;
        case 3 :
            echo "Wednesday";
            break;
        case 4 :
            echo "Thursday";
            break;
        case 5 :
            echo "Friday";
            break;
        case 6 :
            echo "Saturday";
            break;
        case 7 :
            echo "Sunday";
            break;

        default:
            echo "The Day $day not found.";
        }
    ?>