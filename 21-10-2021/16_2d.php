<?php

// Read a 2D array and print sum of its elements.


function add2D($arr){
    $sum = 0;
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr); $j++){
            $sum = $sum + $arr[$i][$j];
        }
    }
    echo "Sum: ", $sum;
}

$arr = array(
    array(2, 3, 8),
    array(6, 5, 4),
    array(7, 8, 9)
    );

echo "Array Elements:<br>";
for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr); $j++){
        echo " ", $arr[$i][$j];
    }
    echo "<br>";
}

add2D($arr);

?>