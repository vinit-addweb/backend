<?php
$num = $_GET ['rev'];
$rev=0;

while($num >1){
    $rem = $num % 10;
    $rev = ($rev*10)+$rem;
    $num = ((int)$num/10);
}
echo "Reverse number: ".$rev;
?>