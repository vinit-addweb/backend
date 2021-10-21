<?php
$char = $_POST['char'];
if($char >="A" &&$char<= "Z"){
    echo "$char is Upper-case charactor";
}
elseif($char>="a" && $char<="z"){
     echo "$char is Lower-case charactor";
}
else{
    echo "$char is digit or special symbol charactor";
}
?>