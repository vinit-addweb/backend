

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
    margin-top: 100px;

}
.head{
    text-align:center;
    margin-bottom:20px;
}
.btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    width: 100%;
    margin-top: 20px;
}

    
    </style>
    <title>Login page</title>
</head>
<body>


    <div class="container-fluid">
   
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3"></div>
            <form class="form-container" method="POST"> 
            <div class="head">
          <h2>Login</h2>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email ">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="*************">
  </div>
  <label><input  name="remember" value="remember" type="checkbox" /> &nbsp;Remember me</label>  
  <button id="btn" name="login" value="login" class="btn btn-primary btn-block"> Submit</button>
  <!-- <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button> -->
  <input type="submit" name="signup" class="btn btn-primary btn-block" value="Signup">  </input>
</form>
        </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'main.php';

if(isset($_POST['login'])){
   $semail=$_POST['email'];
   $spassword=$_POST['pass'];
   error_reporting(0);
  // $conn = mysqli_connect("localhost","root","","College")or die("Error in Connection");
   $sql =" select * from Students where Email ='$semail' and Password='$spassword'";
 // echo $sql;
   $query =mysqli_query($conn,$sql)or die("Error in query");
   $rows=mysqli_num_rows($query);

   if($rows>0){
      session_start();
       //echo "Login Success";
       $_SESSION['email']=$semail;
       header('Location:dash.php');
   
    }
    else
    
    {
        echo "Incorrect Username or Password";

   }

   
}
elseif(isset($_POST['signup'])) {
  header('Location:insert.php');
}

if(isset($_POST['remember'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  setcookie("useremail", $email); 
  setcookie("userpass", $pass); 
}

?>  