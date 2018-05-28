<?php

$string = 'abaaba';
$reverse = '';
$i = 0;
while (!empty($string[$i])) {
    $reverse = $string[$i] . $reverse;
    $i++;
}

if ($reverse === $string) {
    echo "The string is palindrom";
} else {
    echo "The string is not palindrom";
}
