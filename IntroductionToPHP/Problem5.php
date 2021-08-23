 <?php
  //Problem 5:Putting even and odd elements of array in two separate arrays
  
  $array = array(10,44,25,1,23,22,10114,29,7);
  $even=[];
  $odd =[];

   $n = count($array);
   for ($i = 0; $i < $n; $i++){
       if ( $array[$i] %2 ==0)
           array_push($even,$array[$i]) ;
	   else
		    array_push($odd,$array[$i]) ;
   }
   print_r($even);
   echo("\n");
   print_r($odd);
   echo("\n");
   
?>