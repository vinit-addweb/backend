<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
         .form-container{
             background:#fff;
             padding:30px;
             border-radius:10px;
             box-shadow: 0px 0px 10px 0px #000;

         }
         .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 25%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
    
    
}
.head{
    text-align:center;
    margin-bottom:5px;
    font-size:20px;
}
.btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    width: 100%;
    margin-top: 20px;
}
    </style>
    <title>Update details</title>
</head>
<body>
   

    <div class="container-fluid">
   
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3"></div>
            <form class="form-container" method="POST"> 
            <div class="head">
          <h5>Update</h5>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="nam" class="form-control" placeholder="Enter your name">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile no.</label>
    <input type="text" name="mob" class="form-control" placeholder="Enter your name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email ">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="*************">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Type from here..." name="add" ></textarea>
  <label for="floatingTextarea">Address</label>
</div>
  <button id="btn" name="btn" value="login" class="btn btn-primary btn-block"> Submit</button>
  <!-- <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button> -->
  <button type="submit" class="btn btn-primary btn-block">Signup</button>
</form>
        </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!-- <!DOCTYPE html>
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
        <input type="email" name="email" placeholder="Enter Your Email">
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
      </div>
    </form>
   

</body>
</html> -->
 <?php

include 'main.php';
if(isset($_POST['btn'])){
  $sid=$_GET['s_id'];
  $sname=$_POST['nam'];
  $semail=$_POST['email'];
  $smobile=$_POST['mob'];
  $spassword=$_POST['pass'];
  $saddress=$_POST['add'];
  include 'main.php';

  $sql="update Students set Name='$sname',Email='$semail',Password='$spassword',Mobile='$smobile' where Id='$sid';";
  //echo $sql;
  $query=mysqli_query($conn,$sql) or die("Error in Query");

if($query){

echo "Information is update";
header('Location:dash.php');

}
else
{
  echo "Error in update";
}
mysqli_close();
}

?> 