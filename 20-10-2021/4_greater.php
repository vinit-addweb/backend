<?php
$number1 = $_POST ['one'];
$number2 = $_POST ['two'];
$number3 = $_POST ['three'];

if ($number1 > $number2 && $number3<$number1){
    echo "$number1 is Greater";
}
if ($number2 > $number1 && $number2>$number3){
    echo "$number2 is Greater";
}
else{
    echo "$number3 is Greater ";
}
?>