<?php
// Define variables
$operation = $_POST['operation'];
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];

// Convert input to float or int based on operation
switch ($operation) {
    case 'add':
        $result = $input1 + $input2;
        break;
    case 'subtract':
        $result = $input1 - $input2;
        break;
    case 'multiply':
        $result = $input1 * $input2;
        break;
    case 'divide':
        if ($input2 != 0) {
            $result = $input1 / $input2;
        } else {
            echo "Error: Division by zero is not allowed.";
        }
        break;
}

// Display result
echo "The result of your math operation is: $result";
?>
