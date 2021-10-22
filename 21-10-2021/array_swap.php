<?php
function vinit (&$a,&$b,$temp){
    echo "first array before swap : ";
    print_r($a);
    echo "<br>";
    echo "second array after swap : ";
    print_r($b);
    echo "<br>";
   $temp = $a;
    $a = $b;
    $b = $temp;
    echo "first array after swap : ";
    print_r($a);
    echo "<br>";
    echo "second array after swap : ";
    print_r($b);
}
$a = array(4,23,4,55,6,6,7);
$b = array(5,6,7,83,5,6,7);
$temp = array();
vinit($a,$b,$temp);


?>