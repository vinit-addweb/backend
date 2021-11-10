<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <form method="post">
Email:<input type="text" name="email"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" value="Submit" name="btn">
<input type="submit" value="Signup" name="btn2">
</form>
</body>
</html>

<?php
  include 'main.php';

if(isset($_POST['btn'])){
   $semail=$_POST['email'];
   $spassword=$_POST['pass'];
   error_reporting(0);
  
   $sql =" select * from Employee where email ='$semail' and pass='$spassword'";
  
   $query =mysqli_query($conn,$sql)or die("Error in query");

   $rows=mysqli_num_rows($query);

   if($rows>0)
    {
      session_start();
        echo "Login Success";
       $_SESSION['email']=$semail;
       header('Location:dashborad.php');  
       
   
    }
    else
    
    {
        echo "Incorrect Username or Password";

   }

   
}
elseif(isset($_POST['btn2'])) 
  {
  header('Location:signup.php');
}
