<?php

function greet() {
    echo "Hello, World!\n";
}

function add($a, $b) {
    return $a + $b;
}

function multiply($x, $y = 2) {
    return $x * $y;
}

function sum(...$numbers) {
    return array_sum($numbers);
}

greet();

$result1 = add(5, 3);
echo "Result of adding 5 and 3: " . $result1 . "\n";

$result2 = multiply(4);
echo "Result of multiplying 4 by default value (2): " . $result2 . "\n";

$result3 = multiply(4, 3);
echo "Result of multiplying 4 by 3: " . $result3 . "\n";

$result4 = sum(1, 2, 3, 4, 5);
echo "Result of summing 1, 2, 3, 4, and 5: " . $result4 . "\n";

?>
