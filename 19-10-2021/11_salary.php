<?php
    $basic_salary = 20000;
    $da = $basic_salary*40/100;
    $hra = $basic_salary*20/100;
    $med = 100;
    $pf = 150;
    $gross_salary = $basic_salary + $da + $hra - $med - $pf;
    echo "Basic-salary  : ".$basic_salary."<br>";
    echo "Gross-salary  : ".$gross_salary."<br>";
?>