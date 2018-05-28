<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $isPrime = true;
    $num = $_POST['num'];
    for ($i = 2; $i <= ($num / 2); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
        }
    }
    if ($isPrime) {
        echo "It is a Prime Number";
    } else {
        echo "It is not a Prime Number";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Check whether a number prime or not</title>
    </head>
    <body>
        <form name="primenumber" action="" method="post">
            Number :<input type="text" name="num" value="" required><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>