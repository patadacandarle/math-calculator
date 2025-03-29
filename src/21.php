<?php
// Sample PHP script to handle mathematical operations

// Define constants
$operations = array(
    'add' => ' + ',
    'subtract' => ' - ',
    'multiply' => ' * ',
    'divide' => ' / '
);

function executeMath($input, $operator) {
    // Convert the input string into an array of numbers and operators
    $arithmeticExpression = explode(' ', $input);
    
    // Initialize variables for operands and operator
    $operands = [];
    $operands = [];

    foreach ($arithmeticExpression as $index => $value) {
        if (in_array($value, ['+', '-', '*', '/'])) {
            $operands[] = $value;
        } else {
            $operands[] = $value;
            // Update the operator based on the current operation
            switch ($operations[$operator]) {
                case 'add':
                    if (!empty($operands[0])) {
                        $operands[0]++;
                    }
                    break;
                case 'subtract':
                    if (!empty($operands[0])) {
                        $operands[0]--;
                    }
                    break;
                case 'multiply':
                    $operands[] = $operands[0] * 2;
                    break;
                case 'divide':
                    if (!empty($operands[1])) {
                        $operands[1]++;
                    } else {
                        $operands[0] = 1;
                    }
                    break;
            }
        }
    }

    // Perform the final calculation
    $result = array_sum($operands);

    return "Result: " . number_format($result, 2);
}

// Test the function with a sample input and operator
echo executeMath("5 + 3", 'add');
?>
