<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="" method="Post">
    Email: <input type="text" name="email"><br>
    Password: <input type="text" name="pass"><br>

    <input type="submit" value="Login" name="login">
    </form>
</body>
</html>
<?php
include 'main.php';
session_start();
if(isset($_POST['login'])){
   $semail=$_POST['email'];
   $spassword=$_POST['pass'];
   error_reporting(0);
  // $conn = mysqli_connect("localhost","root","","College")or die("Error in Connection");
   $sql =" select * from Students where Email ='$semail' and Password='$spassword'";
   
   $query =mysqli_query($conn,$sql)or die("Error in query");
   $rows=mysqli_num_rows($query);
   

  

   if($rows>0){
       //echo "Login Success";
       $_SESSION['email']=$_POST['email'];
       header('Location:dash.php');
   
    }
    else
    
    {
        echo "Incorrect Username or Password";

   }

   mysqli_close($conn);
}

?>