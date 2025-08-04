<?php

function search($nums, $target) 
{
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);

        if ($nums[$mid] === $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

$nums1 = [-1, 0, 3, 5, 9, 12];
$target1 = 9;
echo "Ejemplo 1: " . search($nums1, $target1) . "\n"; 
$nums2 = [-1, 0, 3, 5, 9, 12];
$target2 = 2;
echo "Ejemplo 2: " . search($nums2, $target2) . "\n"; 
?>
