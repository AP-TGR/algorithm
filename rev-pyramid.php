<?php

/**
 * Method1: This method can be use to draw reversed pyramid with * and numbers too
 * Draw the Reverse Pyramid for given number
 * 
 * @param int $num
 * @return void
 */
function revPyramid($num) {
    for ($i = $num; $i >= 1; $i--) {
        for ($j = $num - $i; $j >= 1; $j--) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 1; $k <= $i; $k++) {
            echo "&nbsp;$i&nbsp;";
//            echo "&nbsp;$i&nbsp;";
//            echo "&nbsp;*&nbsp;";
        }
        echo "<br/>";
    }
}

/**
 * Method2: Can be use to draw the reverse pyramid using * only
 * 
 * @param type $num
 * @return void
 */
function revPyramid2($num) {
    $i = 1;
    while ($i <= $num) {
        echo str_repeat('&nbsp;&nbsp;', $i) . str_repeat('*&nbsp;&nbsp;', $num - $i) . "<br/>";
        $i++;
    }
}

revPyramid(8);
echo "<br/>";
revPyramid2(8);
