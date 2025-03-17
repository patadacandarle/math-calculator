<?php
// Get the numbers to calculate from the user input
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

// Perform the calculation based on the operator selected
if ($_POST['operator'] == '+') {
    $result = $num1 + $num2;
} else if ($_POST['operator'] == '-') {
    $result = $num1 - $num2;
} else if ($_POST['operator'] == '*') {
    $result = $num1 * $num2;
} else if ($_POST['operator'] == '/') {
    $result = $num1 / $num2;
}

// Display the result to the user
echo "The result is: " . $result;
?>