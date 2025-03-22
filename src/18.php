<?php
function calculate($num1, $operation, $num2) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Invalid operation";
    }
}

function displayResult($result, $operation, $num1) {
    switch ($operation) {
        case 'add':
            echo "$num1 + $result = $num2" . PHP_EOL;
            break;
        case 'subtract':
            echo "$num1 - $result = $num2" . PHP_EOL;
            break;
        case 'multiply':
            echo "$num1 * $result = $num2" . PHP_EOL;
            break;
        case 'divide':
            if ($num2 != 0) {
                echo "$num1 / $result = $num2" . PHP_EOL;
            } else {
                echo "Error: Division by zero" . PHP_EOL;
            }
            break;
        default:
            echo "Invalid operation" . PHP_EOL;
    }
}

// Example usage
$num1 = 5;
$num2 = 3;
$operation = 'add';
$result = calculate($num1, $operation, $num2);
displayResult($result, $operation, $num1);

// For multiplication (assuming the user wants to multiply)
$result = calculate(5, 'multiply', 3);
displayResult($result, 'multiply', $num1);
?>
