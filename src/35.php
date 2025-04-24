<?php
function calculate($operands) {
    $operators = ['+', '-', '*', '/'];
    $result = '';

    foreach ($operands as $operand) {
        if (in_array($operator = end($operands), $operators)) {
            switch ($operation = $operands[$operation]) {
                case '+':
                    $result .= $operand;
                    break;
                case '-':
                    $result = -$operand;
                    break;
                case '*':
                    $result = $operand * $result;
                    break;
                case '/':
                    if ($operand != 0) {
                        $result = $operand / $result;
                    } else {
                        return "Error: Division by zero";
                    }
            }
        } else {
            $result .= $operand;
        }
    }

    return "Result: " . $result;
}
?>
