<?php
session_start();    
include 'main.php';
$id=$_GET['id'];
$cat=$_SESSION['cat'];  

//$conn = mysqli_connect("localhost","root","","Ecommerce");
$sql = "delete from $cat where pro_id =$id";
echo $sql;

$query=mysqli_query($conn,$sql) or die("Error in query");

if($query)
{
    echo "Data is Deleted";
    header("Location:mandash.php?cat=$cat");

else
{
    echo "Error in deleting";
}
?>