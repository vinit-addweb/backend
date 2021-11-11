<?php

include 'main.php';
$id=$_GET['s_id'];
$sql="select * from mens where proid=$id";

$q= mysqli_query($conn,$sql) or die("Error in query");

$r=mysqli_fetch_array($q)
$semail=$_SESSION['']

?>