<!--PHP Indexed Array  -->

<?php
//There are two ways to create indexed arrays:

// $cars[0] = "Volvo";
// $cars[1] = "BMW";
// $cars[2] = "Toyota";

//or the index can be assigned manually:
//$cars = ["Volvo", "BMW", "Toyota"]; 
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<!-- Loop Through an Indexed Array -->

<?php
//To loop through and print all the values of an indexed array, you could use a 'for' loop

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<?php
    $color = array("red", "green", "blue");

    foreach($color as $value){
        echo $value ."<br>";

    }
?>


<!-- PHP Associative Arrays -->

<?php
    
    // Associative arrays are arrays that use named keys that you assign to them.
    
    // There are two ways to create an associative array: 
    
    // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // or:

    // $age['Peter'] = "35";
    // $age['Ben'] = "37";
    // $age['Joe'] = "43";


   
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";
?>


<!-- Loop Through an Associative Array -->

<?php
    //To loop through and print all the values of an associative array, you could use a 'foreach' loop

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
?>



<!-- PHP - Two-dimensional Arrays -->
<!-- A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays). -->
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  for ($col = 0; $col < 3; $col++) {
    echo $cars[$row][$col]. ' ';
  }
  echo "</br>";
}

foreach($cars as $value_1){
    foreach($value_1 as $value_2){
        echo $value_2 .' ';
    }
    echo '<br>';
}
?>


<!-- PHP - Multidimensional Arrays -->

<?php
    $marks = [
        "anil"=> ['eng'=>69,'math'=>78, 'science'=>87],
        "maheswar"=> ['eng'=>76,'math'=>68, 'science'=>77],
        "badal"=> ['eng'=>86,'math'=>78, 'science'=>80]
    ];

    foreach($marks as $key => $value_1){
        echo $key;
        foreach( $value_1 as $value_2 ){
            echo $value_2 . " ";
        }
        echo '<br>';
    }
?>