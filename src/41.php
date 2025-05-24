<?php
// Import necessary functions
function sqrt($num) {
    return sqrt($num);
}

function factorial($num) {
    return factorial($num, 1);
}

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function lcm($num1, $num2) {
    return (int) ($num1 * $num2 / gcd($num1, $num2));
}
?>
