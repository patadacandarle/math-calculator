 <?php
function add($a,$b){
return $a+$b;
}
function subtract($a,$b){
return $a-$b;
}
function multiply($a,$b){
return $a*$b;
}
function divide($a,$b){
if($b==0) {
throw new Exception("Division by zero!");
} else {
return $a/$b;
}
}
?>