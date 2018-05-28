<?php

$num = 100;
echo fibo($num);

function fibo($n) {
    
    if($n < 3) {
        return $n;
    }
    
    return fibo($n - 1) + fibo($n - 2);
}
