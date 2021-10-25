<?php

function EvenOddSum($arr, $l)
{
    $sum = 0;
    
    for ($i = 0; $i < $l; $i++)
    {
         
        
        if ($i % 2 == 0)
            $sum += $arr[$i];
        
    }
 
    echo($sum);
    
}
 
// Driver Code
$arr = array( 1, 2, 3, 4, 5, 6,4,26,53 );
$l = sizeof($arr);
 
EvenOddSum($arr, $l);
?>
