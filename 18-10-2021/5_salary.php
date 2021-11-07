<?php
    $basic_salary = 20000;
    $da = $basic_salary*40/100;
    $hra = $basic_salary*20/100;
    $gross_salary = $basic_salary + $da + $hra;
    echo "Basic-salary  : ".$basic_salary."<br>";
    echo "Gross-salary  : ".$gross_salary."<br>";
?>