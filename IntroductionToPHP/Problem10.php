<?php
 //Problem 10:function to set union of two arrays (no duplicates)
 function Union_Arrays($array1,$array2){
	 $array1= array_unique($array1);
     $array2= array_unique($array2);
	 $array_result= $array1;
	 $length = count($array2);
	   for($i=0;$i<$length;$i++){
         if(!in_array($array2[$i], $array1)){
           array_push($array_result,$array2[$i]);
         }
	   }
	   return $array_result;
  } 

   $list1 =[4,5,6,7,10,13,13,13,7];
  $list2=[4,5,7,8,10,11,13];
  
  print_r( Union_Arrays($list1,$list2));
 ?>