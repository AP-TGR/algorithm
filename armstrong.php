<?php

/**
 * Return whether the number is armstrong or not
 * 
 * @param int $number
 * @return boolean
 */
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    
    while ($temp != 0) {
        $remainder = $temp % 10; //find reminder
        $sum = $sum + ( $remainder * $remainder * $remainder );
        $temp = $temp / 10;
    }
    
    return ($number == $sum);
}

$num = 371;
if (isArmstrong($num)) {
    echo "The number $num is an Armstrong number";
} else {
    echo "The number $num is not an Armstrong number";
}