<?php
include 'main.php';
session_start();
$cat = $_SESSION['cat'];
$id=$_GET['d_id'];
$status=$_GET['status'];
$q="update $cat set status = $status where 	pro_id=$id";
echo $q;
mysqli_query($conn,$q);
header("Location:mandash.php?cat=$cat");
?>