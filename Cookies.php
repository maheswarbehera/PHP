<!-- setcookie(name, value, expire, path, domain, secure, httponly); -->

<?php
$cookie_name = "user03";
$cookie_value = "anilkbehera";

setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");
?>

<!DOCTYPE html>
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

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>


<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() + 60);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>