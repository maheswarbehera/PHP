
<?php
    function divide($dividend, $divisor){
        if($divisor ==0){
            throw new Exception("Division by zero", 21);
        }
        return $dividend / $divisor;
    }
    

    try{
        echo divide(2,0);
    }catch(Exception $error){

        $message = $error -> getMessage();
        $code = $error -> getCode();
        $file = $error -> getFile();
        $line = $error -> getLine();

        echo 'unable to divide <br>';

        echo "Exception throw in ' $file' <br> on line '$line:'<br> [Code $code] <br>$message ";
    }
    finally{
        echo '<br>process complete.';
    }
?>