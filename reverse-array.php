<?php
/**
 * Method1: Using php string function
 * Return the reversed array structure for given array
 * 
 * @param array $array
 * @return array
 */
function revArray($array) {
    $arrStr = strrev(implode(',', $array));
    return explode(',', $arrStr);
}

/**
 * Method2: Reverse the array using loop 
 * Return reversed array for give array
 * 
 * @param array $array
 * @return array
 */
function revArray2($array) {
    $revArray = [];
    for($i= count($array)-1; $i>=0; $i--) {
        $revArray[] = $array[$i];
    }
    return $revArray;
}

$arr = [1,2,3,4,5];
echo "<pre>";
print_r(revArray($arr));
print_r(revArray2($arr));