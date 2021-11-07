<?php

$maths = $_POST ['Maths'];
$Physics = $_POST ['Physics'];
$Chemistry = $_POST ['Chemistry'];

$total = $maths + $Physics + $Chemistry;
$p = $total/300*100;
echo "Maths = ".$maths."<br>";
echo "Chemistry =".$Chemistry."<br>";
echo "Physics =".$Physics."<br>";
echo "Total marks obtain : ".$total."<br>";
echo "Percentage = ".$p."% <br>";

if($p>=60 && $p<=100){
    echo "First Divison";
}
elseif($p<=59 && $p>=45){

    echo "Second Divison";
}
else{
    echo "Third divison";
}


?>