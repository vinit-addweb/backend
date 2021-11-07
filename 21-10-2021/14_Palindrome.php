<?php

function Palindrome($arr){
    $mid = (int)(count($arr)/2);
    $f = 0;

    for($i=0; $i<$mid; $i++){
        if($arr[$mid-($i+1)] === $arr[$mid+($i+1)]){
            continue;
        }
        else{
            echo "<br>Array is not in Palindrome form";
            $f = 1;
            break;
        }
    }

    if($f == 0){
        echo "<br>Array is in Palindrome form";
    }
}

$arr = array(5,6,7,8,7,6,5);    
echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

if(count($arr) % 2 == 0 || count($arr) == 0 || count($arr) == 1){
    echo "<br>Array is not in Palindrome form";
}
else{
    Palindrome($arr);
}

?>