<?php
	//Problem 7: get the index of highest value in an associative array
	
  $array = array("Math" => 14,"Physics" => 9,"Chemistry" => 7,"English" => 17,"Biology" => 4);
  $max_key = 0;
  $max_val = 0;

  foreach ($array as $key => $value) {
    if ($value > $max_val) {
      $max_key = $key;
      $max_val = $value;
    }
  }

  echo "The index of maximum value is $max_key";
?>
