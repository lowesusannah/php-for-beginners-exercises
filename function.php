<?php

//A function that returns sum of 2 numbers and passes parameters and call it using parameter values

function add($number1, $number2) {
  $sum = $number1 + $number2;
  return $sum;
  //return $number1 + $number2; -- my inital answer see above for corrected version
  //$sum = return;
}

$newVariable = add(1, 2);
echo $newVariable . "<br>";


?>
