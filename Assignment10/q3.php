<?php

$globalVar = 10;

function accessGlobalVariable() {
   
    global $globalVar;
    echo "Inside the function: " . $globalVar . "\n";
}


echo "Before calling the function: " . $globalVar . "\n";

accessGlobalVariable();

echo "After calling the function: " . $globalVar . "\n";

?>
