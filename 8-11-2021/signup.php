<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.ss">

    <title>Signup</title>
</head>
<body>
         

<!-- <section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5"> -->
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method ="post">
             Name:<input type="text"  name = "nam"><br>
             mobile:<input type="text" name = "mob"><br>
             email:<input type="email" name = "email"><br>
             password:<input type="password" name = "pass"><br>
             cpassword:<input type="password" name = "cpass"><br>
             <input type="submit" value="submit" name="insert">
              </form>

            <!-- </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
</body>
</html>

<?php
//include 'main.php';
if(isset($_POST['insert']))
{
    $sid=$_POST['id'];
    $sname=$_POST['nam'];
    $smobile=$_POST['mob'];
    $semail=$_POST['email'];
    $spass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if ($spass != $cpass) {
      echo "password not match";
  }
  else{
    

    error_reporting(0);
      $conn = mysqli_connect("localhost","root","","college") or die("Error in Connection");
    $sql = "Insert into Employee (name,mobile,email,pass) values ('$sname',$smobile,'$semail','$spass')";
   echo $sql;
    $q = mysqli_query($conn,$sql) or die("Error in query");
   
  if($q)
{
    //echo "data Inserted";
     header('Location:login.php');

}
else 
{
    echo "Error";
}
}
}
?>
