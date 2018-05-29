<?php

/**
 * Method 1
 * Return whether the give string is palindrom or not
 * 
 * @param string $string
 * @return boolean
 */
function isPalindrom($string) {
    $reverse = '';
    $i = 0;
    while (!empty($string[$i])) {
        $reverse = $string[$i] . $reverse;
        $i++;
    }

    return $reverse === $string;
}

$string = 'abaaba';
if (isPalindrom($string)) {
    echo "The string is palindrom";
} else {
    echo "The string is not palindrom";
}

/**
 * Method 2
 */
if ($string == strrev($string)) {
    echo "<br>Its palindrom used another method";
}
        
        
