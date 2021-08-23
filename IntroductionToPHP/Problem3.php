<?php
//Problem 3 : max and min in an array


$array = array(-2,-1, 100, 2500, 5000);

   $n = count($array);
   $max = $array[0];
   $min = $array[0];
   for ($i = 1; $i < $n; $i++){
       if ($max < $array[$i])
           $max = $array[$i];
	   if ($min > $array[$i])
           $min = $array[$i];
   }
        
echo("The maximum in the array is $max");
echo("\n");
echo("The minimum in the array is $min");
echo("\n");
?>