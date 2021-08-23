<?php
//Problem 4: Reverse elements of an array

 
  function Reverse($ar){
  $len=count($ar);
  for($i=0;$i<$len/2;$i++){
    $temp = $ar[$i];
    $ar[$i] = $ar[$len-$i-1];
    $ar[$len-$i-1] = $temp;
  }
  return $ar;
 }
   $ar = [15,2,34, 54, 92, 453,29];
   $ar = Reverse($ar);
  print_r($ar);

 ?>