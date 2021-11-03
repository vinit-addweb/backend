<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update details</title>
</head>
<body>
   
<form method="POST">
    <div id="container">
      <div class="head">
          <h2>Update Details</h2>
      </div>
       <label for="Name">Name:</label>
      <div class="frm">
         <input type="text" name="nam" placeholder="Enter Your Name">
      </div>
      <label for="Name">Mobile:</label>
      <div class="frm">
        <input type="text" name="mob" placeholder="Enter Your Mobile no.">
      </div>
      <label for="Name">Email:</label>
      <div class="frm">
        <input type="email" name="mail" placeholder="Enter Your Email">
      </div>
      <label for="Name">Password:</label>
      <div class="frm">
          <input type="password" name="pass" placeholder="****************" >
      </div>
      <label for="Name">Address:</label>
      <div class="frm">
          <textarea name="add"  cols="33" rows="5" placeholder="Type from here....."></textarea>
      </div>
      <button id="btn" name="btn"> Submit</button>
    </form>
    </div>

</body>
</html>
 <?php

include 'main.php';
if(isset($_POST['btn'])){

  $sname=$_POST['nam'];
  $semail=$_POST['mail'];
  $smobile=$_POST['mob'];
  $password=$_POST['pass'];
  $address=$_POST['add'];
  include 'main.php';

  $sql="update student set Name='$sname',Email='$semail',Password='$spassword',Mobile='$smobile' where Id=$sid";
  echo $sql;
  $query=mysqli_query($conn,$sql) or die("Error in Query");

if($query){
echo "Information is update";
header("Location:dash.php");
}
else
{
  echo "Error in update";
}
mysqli_close();
}

?> 