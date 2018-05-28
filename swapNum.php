<?php
if (isset($_POST['submit'])) {
    $value1 = $_POST['num1'];
    $value2 = $_POST['num2'];

    $value1 = $value1 + $value2;
    $value2 = $value1 - $value2;
    $value1 = $value1 - $value2;
    echo "Value of first variable after swapping" . $value1 . "<br />";
    echo "Value of second variable after swapping" . $value2;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Swap two values without third Variable</title>
    </head>
    <body>
        <form name="factorial" action="" method="post">
            Number 1 :<input type="text" name="num1" value="" required=""><br /><br />
            Number 2 :<input type="text" name="num2" value="" required=""><br />

            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>