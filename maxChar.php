<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

$string = "Hello there!!";
$strArr = str_split($string);
$charMap = array();

array_map(function ($str) use (&$charMap) {
    $charMap[$str] = isset($charMap[$str]) ? ++$charMap[$str] : 1;
}, $strArr);

$maxChars = implode(',',array_keys($charMap, max($charMap)));

echo "Maximum Used characters: <br/>" . $maxChars;