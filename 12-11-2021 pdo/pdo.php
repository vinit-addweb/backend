<?php

$db="mysql:host=localhost;dbname=pdotesting";
$conn= new PDO($db,"root","");

$s="select * from students";

$sql=$conn->query($s);
//print_r($sql);

while($row=$sql->fetch(PDO::FETCH_ASSOC)){
//  echo "<pre>";
//     print_r($row);

//  echo "</pre>"; 

echo"{$row['id']}-{$row['name']}-{$row['mobile']}-{$row['email']}";
}
?>