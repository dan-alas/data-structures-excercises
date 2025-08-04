<?php

function mergeSort(array $arr): array {
    $n = count($arr);
    if ($n <= 1) {
        return $arr; 
    }

    $mid = intdiv($n, 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right): array {
    $result = [];
    $i = 0;
    $j = 0; 


    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

//Pruebas
$numeros = [38, 27, 43, 3, 9, 82, 10];
echo "Arreglo original:\n";
print_r($numeros);

$numerosOrdenados = mergeSort($numeros);
echo "Arreglo ordenado con Merge Sort:\n";
print_r($numerosOrdenados);

?>
