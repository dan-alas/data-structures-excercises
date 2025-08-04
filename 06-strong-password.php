<?php

function minimumNumber($n, $password) {
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";

    $hasNumber = false;
    $hasLower = false;
    $hasUpper = false;
    $hasSpecial = false;

    for ($i = 0; $i < $n; $i++) {
        $ch = $password[$i];
        if (strpos($numbers, $ch) !== false) {
            $hasNumber = true;
        } elseif (strpos($lower_case, $ch) !== false) {
            $hasLower = true;
        } elseif (strpos($upper_case, $ch) !== false) {
            $hasUpper = true;
        } elseif (strpos($special_characters, $ch) !== false) {
            $hasSpecial = true;
        }
    }

    $missingTypes = 0;
    if (!$hasNumber) $missingTypes++;
    if (!$hasLower) $missingTypes++;
    if (!$hasUpper) $missingTypes++;
    if (!$hasSpecial) $missingTypes++;

    $toAdd = max($missingTypes, 6 - $n);

    return $toAdd;
}

//Pruebas
echo minimumNumber(3, "Ab1") . "\n";       
echo minimumNumber(11, "#HackerRank") . "\n";  

?>
