<?php

function calculate($operator, $num1, $num2) {
  switch ($operator) {
    case '+':
      return $num1 + $num2;
    case '-':
      return $num1 - $num2;
    case '*':
      return $num1 * $num2;
    case '/':
      if ($num2 == 0) {
        throw new Exception('Division by zero is not allowed');
      }
      return $num1 / $num2;
    default:
      throw new Exception('Invalid operator');
  }
}

?>
