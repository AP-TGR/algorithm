<?php

function areAnagrame($str1, $str2) {
    return count_chars($str1, 1) == count_chars($str2, 1);
}

$str1 = 'one';
$str2 = 'noe';
if (areAnagrame($str1, $str2)) {
    echo "This '" . $str1 . "', '" . $str2 . "' are Anagram";
} else {
    echo "This two strings are not anagram";
}