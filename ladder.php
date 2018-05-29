<?php

function drawLadder($num) {
    for ($i=1;$i<=$num;$i++) {
        for($j=1;$j<=$i;$j++) {
//            echo $i;
//            echo $j;
            echo '*';
        }
        echo "<br>";
    }
}



$number = 10;
drawLadder($number);

//for ($i=1; $i<=$number; $i++) {
//    for ($j=1; $j<=$i; $j++) {
//        echo $j;
//    }
//    echo "<br/>";
//}