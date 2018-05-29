<?php

/**
 * Return whether the given number is leap year or not.
 * 
 * @param int $year
 * @return boolean
 */
function isLeapYear($year) {
    return $year % 4 == 0;
}

$year = 2020;
if (isLeapYear($year)) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}