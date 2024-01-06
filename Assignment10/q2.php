<?php
$number = 15;

if ($number > 0) {
    echo "The number is positive.\n";
} else if ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}

$i = 1;
echo "While loop:\n";
while ($i <= 5) {
    echo $i . "\n";
    $i++;
}

echo "For loop:\n";
for ($j = 1; $j <= 5; $j++) {
    echo $j . "\n";
}

$day = "Monday";
echo "Switch statement:\n";
switch ($day) {
    case "Monday":
        echo "It's the beginning of the week.\n";
        break;
    case "Friday":
        echo "It's almost the weekend.\n";
        break;
    default:
        echo "It's a regular day.\n";
}

?>
