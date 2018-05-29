<?php

function getFactorial($number) {
    $fact = 1;
    for ($i=1;$i<=$number;$i++) {
        $fact = $fact * $i;
    }
    return $fact;
}

$num = 5;
$factorial = getFactorial($num);
echo "Factorial of $num is : $factorial";