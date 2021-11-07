<?php
$cost = $_POST ['cost'];
$sell = $_POST ['sell'];

$profit = $sell - $cost;
$loss = $cost - $sell;

if ($profit == $loss){
    echo "No profit no loss";
}
elseif($profit<$loss){
    echo "loss with : ".$loss;
}
else{
    echo "profit with : ".$profit;
}

?>
