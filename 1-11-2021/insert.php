
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <form  method="POST">
    Id: <input type="text" name="id"><br>
    Name: <input type="text" name="nam"><br>
    Mobile: <input type="text" name="mob"><br>
    Email: <input type="email" name="email"><br>
    Password:    <input type="password" name="pass"><br>
    Address: <textarea rows="2" cols="20" name="add" placeholder="Type from here..."></textarea><br>
    <input type="submit" name="insert" value="submit">
    </form>
</body>
</html>
<?php
include 'main.php';
if(isset($_POST['insert']))
{
    $sid=$_POST['id'];
    $sname=$_POST['nam'];
    $smobile=$_POST['mob'];
    $semail=$_POST['email'];
    $spassword=$_POST['pass'];
    $saddress=$_POST['add'];

    error_reporting(0);
    //$conn = mysqli_connect("localhost","root","","College") or die("Error in Connection");
    $q = mysqli_query($conn,"Insert into Students(Id,Name,Mobile,Email,Password,Address)
    values($sid,'$sname',$smobile,'$semail','$spassword','$saddress')") or die("Error in query");

  if($q)
{
    echo "data Inserted";
    header('Location:dash.php');

}
else 
{
    echo "Error";
}
}
?>