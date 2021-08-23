  <?php
  //Problem 8: Merge two commas separated lists with unique value only
  
  $list1 ="4,5,6,6,7,10,13";
  $list2="4,5,7,8,10,11,11";
  $array1= explode(",",$list1);
  $array2= explode(",",$list2);
  $array1= array_unique($array1);
  $array2= array_unique($array2);
  $length = count($array2);
  for($i=0;$i<$length;$i++){
    if(!in_array($array2[$i], $array1)){
      array_push($array1,$array2[$i]);
    }
  }
  $list_result =  implode(', ', $array1);
  print_r($list_result);
  ?>