 <?php
    //Problem 6: Function that converts binary to decimal
   
function BinaryToDecimal($binaryNb)
{
    $num = $binaryNb;
    $decNb = 0;
     
    // Initializing base value to 1, i.e 2^0
    $base = 1;
     
    $temp = $num;
    while ($temp)
    {
        $last_digit = $temp % 10;
        $temp = $temp / 10;
         
        $decNb += $last_digit * $base;
        $base = $base*2;
    }
    return $decNb;
}
 
    $num = 10101001;
    echo "The decimal number of binary number $num  is " .BinaryToDecimal($num);
 ?>