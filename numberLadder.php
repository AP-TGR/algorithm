<?php

$number = 10;

for ($i=1; $i<=$number; $i++) {
    for ($j=1; $j<=$i; $j++) {
        echo $j;
    }
    echo "<br/>";
}