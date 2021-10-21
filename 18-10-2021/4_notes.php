<?php
    $total_Rs = 10;
    echo "Total Rs : ". $total_Rs."<br>";
    $coin100 = floor($total_Rs/100);
    $r = $total_Rs%100;

    $coin50 = floor($r/50);
    $r = $r%50;
    
    $coin20 = floor($r/20);
    $r = $r%20;

    $coin10 = floor($r/10);
    $r = $r%10;

    $coin5 = floor($r/5);
    $r = $r%5;

    $coin2 = floor($r/2);
    $r = $r%2;

    $coinsof1 = $r;

    echo "<br>Coins of 100 : ".$coin100."<br>";
    echo "Coins of 50 : ".$coin50."<br>";
    echo "Coins of 20 : ".$coin20."<br>";
    echo "Coins of 10 : ".$coin10."<br>";
    echo "Coins of 5 : ".$coin5."<br>";
    echo "Coins of 2 : ".$coin2."<br>";
?>
