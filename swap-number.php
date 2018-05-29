<?php

/**
 * Swap the numbers without using third variable
 * 
 * @param int $num1
 * @param int $num2
 * @return void
 */
function swap($num1, $num2) {
    echo "Currently ,Num 1 = $num1 and num2 = $num2";
    
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    
    echo "<br/>Now,Num 1 = $num1 and num2 = $num2";
}

swap(1, 2);