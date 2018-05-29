<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

// Method 1
function getMaxUsedChr($str) {
    $strCount = count_chars($str, 1);
    $maxChar = array_keys($strCount, max($strCount));
    return chr($maxChar[0]); // Convert Ascii value to chracter
}

// Method2
function getMaxUsedChr2($str) {
    $strArr = str_split($str);
    $charMap = array();

    array_map(function ($str) use (&$charMap) {
        $charMap[$str] = isset($charMap[$str]) ? ++$charMap[$str] : 1;
    }, $strArr);

    return implode(',', array_keys($charMap, max($charMap)));
}

$string = "Hello there!!!!";
echo "Maximum Used characters Method1: " . getMaxUsedChr($string);
echo '<br/>';
echo "Maximum Used characters Method2: " . getMaxUsedChr2($string);
