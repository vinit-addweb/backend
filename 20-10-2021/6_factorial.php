<?php
$fac = $_POST ['fac'];
$f = 1;
for ($x=$fac;$x>1;$x--){
    $f = $f*$x;
}
echo" $f is Factorial of $fac ";

?>