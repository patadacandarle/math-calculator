<?php
// Define constants
$operations = array(
    'add' => "+",
    'subtract' => "-",
    'multiply' => "*",
    'divide' => "/"
);

function calculate($operands) {
    if (empty($operands)) {
        return 0;
    }

    // Convert the operands to floats for simplicity
    $operands = array_map('floatval', $operands);

    // Perform operations
    $result = call_user_func_array(array_sum, $operands);
    
    return $result;
}

// Example: Calculate 5 + 3
$result = calculate([5, 3]);
echo "Result: $result"; // Output: Result: 8

// Function to test the calculate function with different inputs
function testCalculate() {
    echo "Testing with operands [5, 3]:\n";
    print_r(calculate([5, 3]));
    
    echo "\nTesting with a mix of operations and numbers:\n";
    print_r(calculate([5, 2, 3, 'add', 10] / 2));
}

// Run the test function to verify the calculate function
testCalculate();
?>
