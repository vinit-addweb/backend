<?php

// include 'main.php';
     $sid=$_GET['s_id'];
     $conn = mysqli_connect("localhost","root","","college" ) or die("Error in connection");
     
     $sql = "select * from Employee where id = $sid";
     
     $query = mysqli_query($conn, $sql) or die("Error in Query");

 $row=mysqli_fetch_array($query);

     $semail= $_SESSION['email'];

 $s = "select * name from Employee where email='$semail'";
 echo "<center><b><h3>Welcome ".$row["name"]."</center>";

 $sid = $row['id'];
 $sname = $row['name'];
 $semail = $row['email'];
 $spass = $row['pass'];
 $smobile = $row['mobile'];  
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
<h2 class="text-uppercase text-center mb-5">update page</h2>

<form method ="post">
Name:<input type="text"  name = "nam" value=<?php echo $sname?> ><br>
mobile:<input type="text" name = "mob"   value=<?php echo $smobile?>><br>
email:<input type="email" name = "email"  value=<?php echo $semail?>><br>
password:<input type="password" name = "pass" placeholder="*********"><br>
cpassword:<input type="password" name = "cpass" placeholder="*********"><br>
<input type="submit" value="submit" name="update" onclick="Password()">
</form>

<!-- <script>  
function Password() {  
  var pw1 = document.getElementById("pass");  
  var pw2 = document.getElementById("cpass");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password created successfully");  
  }  
}  
</script>   -->
</body>
</html>

 <?php
 ob_start();
 include 'main.php';
 if(isset($_POST['update'])){
   $sid=$_GET['s_id']; 
   $sname=$_POST['nam'];
   $semail=$_POST['email'];
   $smobile=$_POST['mob'];

   $spassword=$_POST['pass'];
   $cpassword=$_POST['cpass'];
if ($spassword != $cpassword) {
    echo "password not match";
}
else{

   $sql="update Employee set name='$sname',email='$semail',pass='$spass',mobile='$smobile',pass='$spassword' where id='$sid';";
  echo $sql;
  $q=mysqli_query($conn,$sql);
   if($q){
     echo "data is updated";
     header('Location:dashborad.php');
   
  }
 else
 {
   echo "Error in update";
 }
}
 mysqli_close();
}
?>
