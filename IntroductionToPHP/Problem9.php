<?php
//Problem 9: function to remove a specified entry from an array

  Function RemoveEntry($entry,$array){
	  $length = count($array);
	  for($i=0;$i<$length;$i++){
		  if($array[$i]== $entry){
			  array_splice($array,$i,1);
		  }
	  }
	  return $array;  
  }
  $array=["a","b","c","d","e"];
  print_r(RemoveEntry("c",$array));
 ?>