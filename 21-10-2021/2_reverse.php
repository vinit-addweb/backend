<?php


echo "Array Elements: ";

function arr($array){
foreach($array as $a){
    echo " ",$a;
}

echo "<br>", "Reversed array: ";

foreach(array_reverse($array) as $a){
    echo $a, " ";
}
}
$array = array(5,6,7,8,9);
arr($array);
?>