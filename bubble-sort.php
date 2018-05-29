<?php

/**
 * Return sorted array using bubble sort method
 * 
 * @param aray $array
 * @return array
 */
function bubbleSort($array) {
    $c = count($array) -1; // Count or array and -1 to get the last key
    do
    {
        $swapped = false;
        for($i=0; $i<$c; $i++) {
            if ($array[$i] > $array[$i+1]) {
                list($array[$i], $array[$i+1]) = [$array[$i+1], $array[$i]];
                $swapped = true;
            }
        }
    }
    while($swapped);
    return $array;
}

$sortedArr = bubbleSort([5,8,9,2,1,0,95,54,32,10,12,15,20]);
echo '<pre>';
print_r($sortedArr);

