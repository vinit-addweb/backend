<?php

$n = 566;
$weekdays = 7;
$year = $n/365;
$weeks = $n%365/$weekdays;
$days = ($n%365)%($weekdays);

echo "Years: ".(int)$year."<br>";
echo "Weeks: ".(int)$weeks."<br>";
echo "Days: ".(int)$days."<br>";

?>