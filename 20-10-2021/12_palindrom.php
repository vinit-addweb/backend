<?php

$MyNum = $_GET['inp1'];
$revNum = 0;
$Num = $MyNum;
  
while($Num > 0) {
    $digit = $Num % 10;
    $revNum = $revNum * 10 + $digit;
    $Num = (int)($Num / 10);
}
  
if ($MyNum == $revNum){
    echo $MyNum." is a Palindrome number.";
} 
else{
    echo $MyNum." is not a Palindrome number.";
}

?>