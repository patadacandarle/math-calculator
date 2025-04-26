<?php
// Define constants for numbers and operations
define("MINUS", "-");
define("MULTIPLY", "*");
define("DIVIDE", "/");

function calculate($expression) {
    // Evaluate the expression using PHP's built-in functions
    $result = performOperation($expression, 'add', MINUS, MULTIPLY);
    
    return $result;
}

function performOperation($expression, $operator, $firstOperand, $secondOperand) {
    switch ($operator) {
        case '+':
            return add($firstOperand, $secondOperand);
        case '-':
            return subtract($firstOperand, $secondOperand);
        case '*':
            return multiply($firstOperand, $secondOperand);
        case '/':
            return divide($firstOperand, $secondOperand);
    }
}

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
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}
