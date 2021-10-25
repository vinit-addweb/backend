<?php


function Arrayy($arr){
    $sum = 0;
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr); $j++){
            $sum = $sum + $arr[$j][$i];
        }
        echo "Sum of row ", $i+1,": ", $sum, "<br>";
        $sum = 0;
    }
}

$arr = array(
    array(2, 243, 12),
    array(45, 5, 4),
    array(54, 45, 9)
    );

echo "Array Elements:<br>";
for($i=0; $i<count($arr); $i++){
    for($j=0; $j<count($arr); $j++){
        echo " ", $arr[$i][$j];
    }
    echo "<br>";
}

Arrayy($arr);
?>