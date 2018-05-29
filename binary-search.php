<?php
echo '<pre>';
/**
 * Return whether the number is available in the array or Not using Binary search
 * 
 * @param array $array
 * @param int $num
 * @return boolean
 */
function binarySearch($array, $num) {
    sort($array); // Sort the array 
    $low = 0;
    $high = count($array) - 1;
    
    while ($low <= $high) {
        $mid = floor(($low+$high)/2);
        
        if ($num == $array[$mid]) {
            return true;
        }
        
        if ($num > $array[$mid]) {
            // Do search in left side
            $low = $mid + 1;
        }
        else {
            // Do search on right side
            $high = $mid - 1;
        }
    }
    
    return false;

}

$array = [10, 5, 50, 8, 3, 6, 9, 12, 40, 42, 11, 91];
$num = 5;
if (binarySearch($array, $num)) {
    echo "The num $num is exist";
}
else {
    echo "The num $num does not exist";
}
