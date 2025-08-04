<?php

function aVeryBigSum($ar) {
    $acumulador = 0;
    for ($i = 0; $i < count($ar); $i++) {
        $acumulador += $ar[$i];
    }
    return $acumulador;
}

$n = 5;
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

echo "Resultado: " . aVeryBigSum($ar);

?>
