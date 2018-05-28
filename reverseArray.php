<?php

$array = array(1, 2, 3, 4);
$revArr = array();
$size = count($array);

for ($i = $size - 1; $i >= 0; $i--) {
    $revArr[] = $array[$i];
}
echo "<pre>";
print_r($revArr);