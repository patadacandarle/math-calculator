<?php
// Math Calculator: A simple Java-based calculator
if (!isset($_POST['operation'])) {
    echo "Please enter an operation.";
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = 0;
    switch ($_POST['operation']) {
        case 'add':
            $result = $_POST['first_number'] + $_POST['second_number'];
            break;
        case 'subtract':
            $result = $_POST['first_number'] - $_POST['second_number'];
            break;
        case 'multiply':
            $result = $_POST['first_number'] * $_POST['second_number'];
            break;
        case 'divide':
            if ($_POST['second_number'] != 0) {
                $result = $_POST['first_number'] / $_POST['second_number'];
            } else {
                echo "Error: Division by zero.";
            }
            break;
        default:
            echo "Invalid operation.";
    }

    // Output the result
    echo 'The result is: ' . $result;

?>
