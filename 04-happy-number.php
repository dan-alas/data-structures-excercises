<?php

function isHappy($n) {
    $seen = [];

    while ($n != 1 && !in_array($n, $seen)) {
        $seen[] = $n;  

        $n = sumOfSquaresOfDigits($n);
    }

    return $n === 1;
}

function sumOfSquaresOfDigits($num) {
    $sum = 0;
    $digits = str_split(strval($num));

    foreach ($digits as $digit) {
        $sum += intval($digit) ** 2;  
    }

    return $sum;
}

$n1 = 19;
$n2 = 2;

echo "Is $n1 happy? " . (isHappy($n1) ? "true" : "false") . "\n";
echo "Is $n2 happy? " . (isHappy($n2) ? "true" : "false") . "\n";

?>
