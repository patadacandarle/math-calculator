<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        throw new Exception("Divide by zero error");
    }
}

function calculate($operation, ...$values) {
    switch ($operation) {
        case '+':
            return add(...$values);
        case '-':
            return subtract(...$values);
        case '*':
            return multiply(...$values);
        case '/':
            if (is_numeric($values[0]) && is_numeric($values[1])) {
                return divide($values[0], $values[1]);
            } else {
                throw new Exception("Invalid operation: division by zero");
            }
    }
}

// Example usage
try {
    echo calculate('+', 5, 3) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
