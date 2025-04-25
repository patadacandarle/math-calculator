<?php
// Function to multiply two numbers
function multiply($a, $b) {
    return $a * $b;
}

// Main function
function main() {
    // Get input from user
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Output result
    echo "Result: " . multiply($num1, $num2) . "\n";
}
