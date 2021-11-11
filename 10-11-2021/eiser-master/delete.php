<?php

include 'main.php';
$id=$_GET['s_id'];
//$conn = mysqli_connect("localhost","root","","Ecommerce");
$sql = "delete from mens where proid=$id";
echo $sql;

$query=mysqli_query($conn,$sql) or die("Error in query");

if($query)
{
    echo "Data is Deleted";
    header('Location:mandash.php');
}
else
{
    echo "Error in deleting";
}
?>