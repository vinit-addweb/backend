<?php




function Arrayy($arr){
    $sum = 0;
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr); $j++){
            $sum = $sum + $arr[$i][$j];
        }
        echo "Sum of row ", $i+1,": ", $sum, "<br>";
        $sum = 0;
    }
}

$arr = array(
    array(1, 4, 14),
    array(6, 5, 435),
    array(23, 8, 94)
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