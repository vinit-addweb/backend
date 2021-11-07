<?php

$a= 20;
$b= 10;
$c= 25;
$perimeter = ($a + $b + $c) / 2;

$area = ($perimeter*($perimeter-$a)*($perimeter-$b)*($perimeter-$c)) ** 0.5;

echo "perimeter of triangle: ".$perimeter;
echo "</br>";
echo "Area of Triangle: ".$area;
?>
