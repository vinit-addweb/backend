<?php

function arrat($arr){
$sumeven = 0;
$sumodd = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    if($n % 2 == 1){
        $sumodd = $sumodd + 1;
    }
    else{
        
        $sumeven = $sumeven + 1;
    }
}

echo "<br>", "Total Even: ".$sumeven;
echo "<br>", "Total Odd: ".$sumodd;
}
$arr = array(2,54,7,86,5,11);

arrat($arr);
?>
