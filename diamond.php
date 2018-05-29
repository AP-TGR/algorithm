<?php
/*
    * 
    * * 
    * * * 
    * * * * 
    * * * * * 
    * * * * 
    * * * 
    * * 
    *
*/

/**
 * Draw the diamond pattern for given number
 * 
 * @param int $num
 */
function diamond($num) {
    for ($i=1; $i<=$num; $i++) {
        for($j=1; $j<=$i; $j++) {
            
            // Check for odd and even
            $k = $num;
            if ($num%2 == 0) {
                $k++;
            }
            
            if (($i + $j) >= $k) {
                break;
            }
            echo '*&nbsp;';
        }
        echo '<br/>';
    }
}

diamond(10);
