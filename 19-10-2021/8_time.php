
<?php

function second ($sec){
    
    $tmin = $sec/60;
    $min = $tmin % 60;
    $hr = $tmin/60; 
    $s = $sec % 60 ;
    echo (int)$hr." hr : ".(int)$min ." min :".(int)$s." s"; 

}

echo second(15412);
?>