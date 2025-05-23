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
    if ($b == 0) {
        echo "Error: Division by zero is not allowed.";
        return null;
    }
    return $a / $b;
}

// Example usage
echo "The result of adding 5 and 3 is: ".add(5, 3)."<br>";
echo "The result of subtracting 2 from 10 is: ".subtract(10, 2)."<br>";
echo "The result of multiplying 4 with 6 is: ".multiply(4, 6)."<br>";
echo "The result of dividing 8 by 4 is: ".divide(8, 4)."<br>";
?>
