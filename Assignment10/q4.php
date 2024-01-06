<?php

$numericArray = array(1, 2, 3, 4, 5);

echo "Numeric Array:\n";
foreach ($numericArray as $value) {
    echo $value . "\n";
}

$associativeArray = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York"
);

echo "\nAssociative Array:\n";
foreach ($associativeArray as $key => $value) {
    echo $key . ": " . $value . "\n";
}

$multidimensionalArray = array(
    array("apple", "orange", "banana"),
    array("carrot", "broccoli", "pepper"),
    array("dog", "cat", "fish")
);

echo "\nMultidimensional Array:\n";
foreach ($multidimensionalArray as $row) {
    foreach ($row as $value) {
        echo $value . "\t";
    }
    echo "\n";
}

?>
