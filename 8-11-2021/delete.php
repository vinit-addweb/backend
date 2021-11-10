<?php

include 'main.php';
$id=$_GET['s_id'];

$sql = "delete from Employee where id=$id";
echo"$sql";

$query=mysqli_query($conn,$sql) or die("Error in Connection");

if($query){
    echo "Data is Deleted";
    header('Location:dashborad.php');
}
else{
    echo "Error in deleting";
}
?>