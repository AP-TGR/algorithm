<?php

function reverseString($string) {
    $revStr = '';
    while(!empty($string[$i])) {
        $revStr = $string[$i] . $revStr;
        $i++;
    }
    return $revStr;
}


$string = 'ABCDEFGH';
echo reverseString($string);
