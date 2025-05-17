<?php
// Set initial variables
$initial_number = 0;
$operating_symbol = '+';
$result = $initial_number;

// Loop through input operations (arithmetic operators)
while ($operation = $_POST['input_operation']) {
    // If the operation is a string, set it to its value
    if (!is_string($operation)) {
        $result += isset($_POST['operand1']) && $_POST['operand1'] != '' ? floatval($_POST['operand1']) : 0 + $_POST['operator'][$operating_symbol] . $_POST['operand2'] : 0;
    } else {
        // Convert input string to integer
        $result = (float) $operation;
    }

    // Update initial number and operator symbol
    if ($operating_symbol == '+') {
        $initial_number = $result;
        $operating_symbol = ' ';
    }
}

// Output the result
echo "The result is: " . $initial_number;
?>
