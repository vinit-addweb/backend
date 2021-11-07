<?php
$number1 = $_POST ['one'];
$number2 = $_POST ['two'];
$number3 = $_POST ['three'];
$number4 = $_POST ['four'];

if ($number1 > $number2 && $number3<$number1 && $number4<$number1 ){
    echo "$number1 is Greater";
}
elseif ($number2 > $number1 && $number2>$number3 && $number4<$number2){
    echo "$number2 is Greater";
}
elseif ($number4 > $number2 && $number3<$number4 && $number1<$number4 ){
    echo "$number4 is Greater";
}
else{
    echo "$number3 is Greater ";
}
?>