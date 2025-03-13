<?php 
//math-calculator
function calculate($num1,$operator,$num2){
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            if($num2 === 0){
                echo "Cannot divide by zero!";
                break;
            }else{
                return $num1 / $num2;
            }
    }
}
?>