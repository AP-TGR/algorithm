<?php

/**
 * return reverse of the given number
 * 
 * @param int $num
 * @return int
 */
function reverseNumber($num) {
    $rev = 0;
    while ($num >= 1) {
        $re = $num % 10;
        $rev = $rev * 10 + $re;
        $num = $num / 10;
    }
    return $rev;
}

echo reverseNumber('123456');