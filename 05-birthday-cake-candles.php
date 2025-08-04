<?php

function birthdayCakeCandles($candles) {
    $maxHeight = max($candles);
    $count = 0;
    foreach ($candles as $height) {
        if ($height == $maxHeight) {
            $count++;
        }
    }
    return $count;
}

$candles = [3, 2, 1, 3];
echo birthdayCakeCandles($candles);  

?>
