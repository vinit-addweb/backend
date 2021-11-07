<?php



function maxx ($arr){
$length = count($arr);
sort($arr);

echo "array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

$max = $arr[$length-1];
$smax = $arr[$length-2];

echo "<br>", "Max: ",$max;
echo "<br>", "second Max: ",$smax;
}
$arr = array(2,4,8,2,4,5,274,52);
maxx($arr);

?>