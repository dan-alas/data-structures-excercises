<?php

function marsExploration($s) {
    $original = "SOS";
    $count = 0;
    $length = strlen($s);
    
    for ($i = 0; $i < $length; $i++) {
        if ($s[$i] !== $original[$i % 3]) {
            $count++;
        }
    }
    
    return $count;
}

$input = "SOSSOT";
$expected = 1;
$result = marsExploration($input);

echo "Input: $input\n";
echo "Expected: $expected\n";
echo "Got: $result\n";

if ($result === $expected) {
    echo "Test Passed\n";
} else {
    echo "Test Failed\n";
}

?>
