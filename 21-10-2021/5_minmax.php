<?php



function maxx ($arr){
$length = count($arr);


echo "array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}
$sort = sort($arr);
$max = $arr[$length-1];
$min = $arr[0];

echo "<br>", "Min: ",$min;
echo "<br>", "Max: ",$max;

}
$arr = array(1,4,8,2,4,5,274,52);
maxx($arr);

?>