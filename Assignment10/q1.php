<?php
$a = 10;
$b = 5;

echo "Arithmetic Operators:\n";
echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . ($a / $b) . "\n";
echo "Modulus: " . ($a % $b) . "\n";

echo "\nComparison Operators:\n";
echo "Equal to: " . ($a == $b) . "\n";
echo "Not equal to: " . ($a != $b) . "\n";
echo "Greater than: " . ($a > $b) . "\n";
echo "Less than: " . ($a < $b) . "\n";
echo "Greater than or equal to: " . ($a >= $b) . "\n";
echo "Less than or equal to: " . ($a <= $b) . "\n";

echo "\nLogical Operators:\n";
$bool1 = true;
$bool2 = false;

echo "AND: " . ($bool1 && $bool2) . "\n";
echo "OR: " . ($bool1 || $bool2) . "\n";
echo "NOT: " . (!$bool1) . "\n";

echo "\nAssignment Operators:\n";
$c = $a;
echo "Value of c: " . $c . "\n";
$c += $b;
echo "After c += b: " . $c . "\n";
$c -= $b;
echo "After c -= b: " . $c . "\n";
$c *= $b;
echo "After c *= b: " . $c . "\n";
$c /= $b;
echo "After c /= b: " . $c . "\n";
$c %= $b;
echo "After c %= b: " . $c . "\n";
?>
