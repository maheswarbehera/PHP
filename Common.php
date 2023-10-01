<?php
// echo("Minimum & Maximum")."<br>";

// echo(min(200,23,21,8,-456,-45))."<br>";
// echo(max(24,542,32,2,-222,-545))."<br>";

// echo(abs(-7.5));

// echo(sqrt(64) . "<br>");
// echo(sqrt(0) . "<br>");
// echo(sqrt(1) . "<br>");
// echo(sqrt(9))."<br>";

// echo(round(0.50))."<br>";
// echo(round(0.49))."<br>";
// echo(round(-4.60))."<br>";
// echo(round(-4.47))."<br>";

// echo(rand(20,30))."<br>";

?>
<?php
define("VariableName","Welcome to PHP case Sensitive");
echo VariableName."<br>";

// define("Demo","caseinsesitive",true);
// echo DEMO;

define("cars", ["Alfa Romeo","BMW","Toyota","Audi"]);
echo cars[3]."<br>";
?>

<?php
$demo = "Hello world! <br>";
echo strlen($demo)."<br>";
?> 

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
echo "<br>";
?> 



<?php
  $mobile = 8658279269;
  if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div> <br>
		";
  }
  else{
    echo "sucess <br>";
  }
  $password = "maheswar@123";
  $repassword = "maheswar@123";
  if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
			";
		}
    else{
      echo "password is $password <br>";
    }

    if(strlen($password) < 9 ){
      echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>Password is weak</b>
        </div>
      ";     
    }
    else{
      echo"$password <br>";
    }
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	$f_name ="Maheswar";
	$l_name ="Behera";
	$email ="bmaheswar439@gmail.com";
	$mobile ="123456790";
  
  if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		
	}
  else{
    echo "this $f_name is  valid..! <br>";
  }
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
		
	}
  else{
    echo "this $l_name is  valid..! <br>";
  }
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..! <br></b>
			</div>
		";
		
	}
  else{
    echo "this $email is  valid..!<br>";
  }
  if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid <br></b>
			</div>
		";
		
	}
  else{
    echo "Mobile number $mobile is  valid <br>";
  }
?>

<?php
	$x = 10;
	$y = 10;

	// echo  $x == $y;
	var_dump($x == $y);
?>
