<?php
$char = $_POST['char'];
if($char >="A" && $char<= "Z"){
    echo "$char is Upper-case charactor";
}
elseif($char>="a" && $char<="z"){
     echo "$char is Lower-case charactor";
}
elseif($char>=1 && $char<=10){
    echo "$char is Number charactor";
}
else{
    echo "$char is digit or special symbol charactor";
}
?>