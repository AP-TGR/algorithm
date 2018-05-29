<?php

/**
 * return sorted array using quick sort method
 * 
 * @param array $array
 * @return array
 */
function quickSort($array) {
    // find array size
    $length = count($array);

    // base case test, if array of length 0 then just return array to caller
    if ($length <= 1) {
        return $array;
    }
    
    // select an item to act as our pivot point, since list is unsorted first position is easiest
    $pivot = $array[0];

    // declare our two arrays to act as partitions
    $left = $right = [];

    // loop and compare each item in the array to the pivot value, place item in appropriate partition
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    // use recursion to now sort the left and right lists
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$revArray = quickSort([5, 7, 8, 9, 3, 45, 67, 89, 43, 54, 1, 3]);
echo "<pre>";
print_r($revArray);
