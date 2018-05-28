<?php
if (isset($_POST['submit'])) {
    $number = $_POST['num'];      // get the number entered by user
    $temp = $number;
    $sum = 0;
    while ($temp != 0) {
        $remainder = $temp % 10; //find reminder
        $sum = $sum + ( $remainder * $remainder * $remainder );
        $temp = $temp / 10;
    }
    if ($number == $sum) {
        echo "$number is an Armstrong Number";
    } else {
        echo "$number is not an Armstrong Number";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Whether a number Armstrong or not</title>
    </head>
    <body>
        <form name="armstrong" action="" method="post">
            Number :<input type="text" name="num" value="" required=""><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>