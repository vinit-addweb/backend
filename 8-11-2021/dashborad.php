<?php
ob_start();
session_start();
if($_SESSION['email']==''){
    header('Location:login.php');
}
else
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php 
    include 'main.php';

    $semail = $_SESSION['email'];
    $query = mysqli_query($conn,"select * from Employee") or die("Error in query");
    
    $sql ="select name from Employee where email ='$semail'";
    
    $q1 = mysqli_query($conn,$sql); 
    $r = mysqli_fetch_array($q1);
    
    echo "<center><b><h3>Welcome ".$r["name"]."</center>";
    
  
    echo"<center><table border=2><tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Password</th><th>Edit</th><th>Delete</th></tr>";
    while($row=mysqli_fetch_array($query))
    {
        $s_id=$row['id'];
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['pass']."</td>";
        echo "<td><a href='edit.php?s_id=$s_id'>Edit</a></td>";
        echo "<td><a href='delete.php?s_id=$s_id'>Delete</a></td>";

    }
    echo "</table></center>";
}   
mysqli_close($conn);

?>

