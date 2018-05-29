<?php
/**
 * Remove repeated characters from string
 * 
 * @param string $str
 * @return string
 */
function removeRepeatedWords($str) {
    $newStr = '';
    $strArray = str_split($str);
    foreach ($strArray as $char) {
        $strArrayKey = array_keys($strArray, $char);
        if (count($strArrayKey) > 1) {
            continue;
        }
        $newStr .= $char;
    }
    return $newStr;
}

echo removeRepeatedWords('Hello World!');
