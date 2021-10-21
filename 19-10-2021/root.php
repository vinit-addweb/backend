<?php
$a = 1;
    $b = -5;
    $c = -6;
    $rootvalue = sqrt(($b*$b) - (4*$a*$c));
    $first_root = ($rootvalue - $b)/(2*$a);
    $second_root = (-$rootvalue - $b)/(2*$a);

    echo "First root is : ".$first_root;
         echo "<br>" ;
      echo "Second root is : ".$second_root;

         ?>