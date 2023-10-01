<!-- PHP Comparison Operators -->

<?php
//Equal $x == $y	
//Returns true if $x is equal to $y
$x = 100;  
$y = "100";

var_dump($x == $y); 
//returns true because values are equal
?>  

<?php
//Not equal	$x != $y	
//Returns true if $x is not equal to $y
$x = 100;  
$y = "100";

var_dump($x != $y); 
// returns false because values are equal
?> 

<?php
//Not equal	$x <> $y	
//Returns true if $x is not equal to $y.
$x = 100;  
$y = "100";

var_dump($x <> $y); 
// returns false because values are equal.
?>

<?php
//Identical	$x === $y
//Returns true if $x is equal to $y, and they are of the same type.
$x = 100;  
$y = "100";

var_dump($x === $y); 
// returns false because types are not equal.
?>  

<?php
//Not identical	$x !== $y	
//Returns true if $x is not equal to $y, or they are not of the same type.
$x = 100;  
$y = "100";

var_dump($x !== $y); 
// returns true because types are not equal.
?> 


<?php
//Greater than	$x > $y	
//Returns true if $x is greater than $y.
$x = 100;
$y = 50;

var_dump($x > $y); 
// returns true because $x is greater than $y.
?>  

<?php
//Less than	$x < $y	
//Returns true if $x is less than $y.
$x = 10;
$y = 50;

var_dump($x < $y); 
// returns true because $x is less than $y.
?>  

<?php
//Greater than or equal to	$x >= $y	
//Returns true if $x is greater than or equal to $y.
$x = 50;
$y = 50;

var_dump($x >= $y); 
// returns true because $x is greater than or equal to $y.
?>  

<?php
//Less than or equal to	$x <= $y	
//Returns true if $x is less than or equal to $y.	
$x = 50;
$y = 50;

var_dump($x <= $y); 
// returns true because $x is less than or equal to $y.
?>  

<?php
//Spaceship	$x <=> $y	
//Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  



<!-- PHP Logical Operators -->



<?php
//Operator Name	  Example	      Condition
//    and	      ($x and $y)	    True if both $x and $y are true
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world! <br>";
}
?> 

<?php
//	and 	( $x && $y )  	True if both $x and $y are true
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world! <br>";
}
?>  

<?php
//Or	 ($x or $y)  	 
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world! <br>";
}
?>

<?php
//	Or	  ( $x || $y )	  True if either $x or $y is true
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world! <br>";
}
?> 


<?php
//Xor	  ($x xor $y)   True if either $x or $y is true, but not both
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world! <br>";
}
?> 

<?php
//	Not	  ( !$x	)   True if $x is not true
$x = 100;  

if ($x !== 90) {
    echo "Hello world! <br>";
}
?>


<!-- PHP Conditional Assignment Operators -->

<?php
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
//$color = "blue";
echo $color = $color ?? "red";
echo "<br>";


//??  Null coalescing	  $x = expr1 ?? expr2	
//Returns the value of $x.
//The value of $x is expr1 if expr1 exists, and is not NULL.
//If expr1 does not exist, or is NULL, the value of $x is expr2.
//Introduced in PHP 7
?>  



<?php
//?:	Ternary  	$x = expr1 ? expr2 : expr3	
//Returns the value of $x.
//The value of $x is expr2 if expr1 = TRUE.
//The value of $x is expr3 if expr1 = FALSE

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($users)) ? "anonymous" : "logged in";
echo("<br>");
?>
<?php
$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";
?> 