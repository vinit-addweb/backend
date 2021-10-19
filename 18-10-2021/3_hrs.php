<?php

function second()
{
    $hr = 1;
    $min = 40;
    $s = 23;
    echo "Total seconds :".(3600*$hr + $min * 60 + $s) ;
}

second();
?>