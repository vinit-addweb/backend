<?php

function rev (&$a,&$b,$temp){

    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "First array after swap: ";
    print_r($a);
    echo "<br>";
    echo "Second array after swap: ";
    print_r($b);
}
$a = array(12,3,4,56,7,8,);

$b = array(46,7,8,5,43,4,3);
$temp = array();
rev($a,$b,$temp);
?>
