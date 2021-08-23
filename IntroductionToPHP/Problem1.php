<?php

// Problem 1:Factorial function
function Factorial($number){
 $result = 1;
 if($number > 1){
  for($i = 2; $i <= $number; $i++){
   $result *= $i;
  }
 }
 return $result;
}
   //testing the function
$number =7;

echo("The factorial of $number is ".Factorial($number));
?>