
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert Data</title>
    <style>
         .form-container{
             background:#fff;
             padding:30px;
             border-radius:10px;
             box-shadow: 0px 0px 10px 0px #000;
             margin-top: 100px;

         }
         .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 25%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    margin-top: 5px;
    
    
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
.heightt{
    height:33px
}
    </style>
</head>
<body>
 

    <div class="container-fluid">
   
   <div class="row">
       <div class="col-12 col-sm-6 col-md-3"></div>
       <form class="form-container" method="POST"> 
       <div class="head">
     <h5>Signup</h5>
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
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Conform Password</label>
<input type="password" name="cpass" class="form-control" placeholder="*************">
</div>

<button name="insert" value="submit" class="btn btn-primary btn-block"> Submit</button>

<p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
</div> 


</form>
   </div>

</div>
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
    $scpasword=$_POST['cpass'];

    if ($scpasword != $spassword) {
        echo "password not match";
    }
    else{
      
    error_reporting(0);
    //  $conn = mysqli_connect("localhost","root","","College") or die("Error in Connection");
    $sql = "Insert into seller (Name,Mobile,Email,Password) values ('$sname',$smobile,'$semail','$spassword')";
   echo $sql;
    $q = mysqli_query($conn,$sql) or die("Error in query");
   
  if($q)
{
    echo "data Inserted";
    header('Location:login.php');

}
else 
{
    echo "Error";
}
}
}
?>