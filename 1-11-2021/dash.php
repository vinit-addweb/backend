<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
          <a href="login.php">Logout </a><br>
</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","College") or die("Error in Connection");
$query = mysqli_query($conn,"select * from Students") or die("Error in query");

$semail= $_SESSION['email'];

$sql =" select Name from Students where Email ='$semail'";

$q1 = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($q1);

echo "<center><b>Welcome ".$r["Name"]."</center>";
echo"<center><table border=2><tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Password</th><th>Password</th><th>Edit</th><th>Delete</th></tr>";
while($row=mysqli_fetch_array($query))
{
    $s_id=$row['Id'];
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Mobile']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Password']."</td>";
    echo "<td>".$row['Address']."</td>";
    
    echo "<td><a href='update.php?s_id=$s_id'>EDIT</a></td>";
    echo "<td>".'<a href="">Delete</a>'."</td>";

}
echo"</table></center>";
mysqli_close($conn);
?>