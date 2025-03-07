<?php

$num1 = rand(0, 9);
$num2 = rand(0, 9);
$operation = array("+", "-", "*", "/");
$selected_operation = $operation[rand(0, 3)];

if ($selected_operation == "+") {
    echo "The result of " . $num1 . " + " . $num2 . " is: ";
    echo $num1 + $num2;
} else if ($selected_operation == "-") {
    echo "The result of " . $num1 . " - " . $num2 . " is: ";
    echo $num1 - $num2;
} else if ($selected_operation == "*") {
    echo "The result of " . $num1 . " * " . $num2 . " is: ";
    echo $num1 * $num2;
} else if ($selected_operation == "/") {
    echo "The result of " . $num1 . " / " . $num2 . " is: ";
    echo $num1 / $num2;
}

?>