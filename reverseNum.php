<?php
if (isset($_POST['submit'])) {
    $rev = 0;
    $num = $_POST['num'];

    while ($num >= 1) {
        $re = $num % 10;
        $rev = $rev * 10 + $re;
        $num = $num / 10;
    }
    echo "Reverse number is " . $rev;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reverse of a number</title>
    </head>
    <body>
        <form name="reversenumber" action="" method="post">
            Number :<input type="text" name="num" value="" required=""><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
