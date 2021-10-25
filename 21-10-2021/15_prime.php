<?php


function prime($arr){
    $f = 0;

    for($i=2; $i<count($arr); $i++){
        if($arr[$i] % $i == 0){
            continue;
        }
        else{
            $f = $f + 1;
        }
    }
    echo "<br>Number of prime elements are: ",$f;
}

$arr = array(2,3,5,6,81,2,3);
echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

prime($arr);

?>