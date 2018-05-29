<?php

/**
 * Return the array of fibo series for given number
 * 
 * @param int $num
 */
function fibo ($num) {
    $fiboSeries = [];
    $fiboSeries[0] = $prev = 0;
    $fiboSeries[1] = $cur = 1;    
    for($i=2; $i<$num; $i++) {
        $fiboSeries[$i] = $prev+$cur; // Next element of fibo series
        $prev = $cur;
        $cur = $fiboSeries[$i];
    }
    return $fiboSeries;
}

echo implode(',', fibo(10));
