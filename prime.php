<?php

/**
 * Return whether the number is prime or not.
 * 
 * @param int $number
 * @return boolean
 */
function isPrimNumber($number) {
    // Flag whether the number is prim or not
    $isPrime = true;

    for ($i = 2; $i <= ($number / 2); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    return $isPrime;
}

// 2,3,5,7,11.....
$num = 11;
if (isPrimNumber($num)) {
    echo "The $num is a prime number";
} else {
    echo "The $num is not a prime number";
}