<?php


function find($arr){
$pos = 0;
$neg = 0;
$zero = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    if($n  < 0){
        $neg = $neg + 1;
    }
    elseif($n > 0){
        $pos = $pos + 1;
    }
    else{
        $zero = $zero + 1;
    }
}
echo "<br>", "Total Zeroes: ".$zero;
echo "<br>", "Total Positive: ".$pos;
echo "<br>", "Total Negative: ".$neg;

}
$num = array(-5,6,8,2,-5,8,0,5,-5,8,0,0);
find($num);
?>