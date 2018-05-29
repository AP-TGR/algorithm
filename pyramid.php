<?php

/**
 * Method1: This method can be use to draw pyramid with * and numbers too
 * Draw the Pyramid for given number
 * 
 * @param int $num
 * @return void
 */
function pyramid($num) {
    for ($i = 1; $i <= $num; $i++) {
        for ($j = $num - $i; $j >= 1; $j--) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 1; $k <= $i; $k++) {
//        echo "&nbsp;$k&nbsp;";
        echo "&nbsp;$i&nbsp;";
//            echo "&nbsp;*&nbsp;";
        }
        echo "<br/>";
    }
}

/**
 * Method2: Can be use to draw the pyramid using * only
 * 
 * @param type $num
 * @return void
 */
function pyramid2($num) {
    $n = $i = 10; 
    while ($i--) {    
        echo str_repeat('&nbsp;&nbsp;', $i).str_repeat('*&nbsp;&nbsp;', $n - $i)."<br/>";
    }
}

pyramid(8);
echo "<br/>";
pyramid2(8);
