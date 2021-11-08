

<?php
            include 'main.php';
            $sid = $_GET['s_id'];
            $sql = "select * from Students where Id = $sid";
            //echo $sql;
            $query = mysqli_query($conn, $sql) or die("Error in Query"); 
            $row = mysqli_fetch_array($query);
            $query=mysqli_query($conn,$sql);
  $semail= $_SESSION['email'];

  $sql =" select Name from Students where Email ='$semail'";
  echo "<center><b><h3>Welcome ".$row["Name"]."</center>";
            $sid = $row['Id'];
            $sname = $row['Name'];
            $semail = $row['Email'];
            $spass = $row['Password'];
            $smobile = $row['Mobile'];
            $saddress=$row['Address'];
            

          
         ?>


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
 /* logout button */

 .btn-primary{
  
 }

  .logout input{
            position:absolute;
            right: 10px;
            top:5px;
            width:5%;
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
    /* logout button */
    .table {
    --bs-table-bg: transparent;
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #212529;
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: #212529;
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: #212529;
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    width: 76%;
    margin-bottom: 1rem;
    color: #212529;
    vertical-align: top;
    border-color: #dee2e6;
    margin-left:10%;
    margin-top:50px;
    text-decoration:none:
}
    </style>
    <title>Update details</title>
</head>
<body>
<div class="top">  
      <div class="logout">
          <form method='POST'>
          <input type="submit" value="Logout" name="logout" class="btn btn-primary">
          </form>
          </div>
          </div>

    <div class="container-fluid">
   
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3"></div>
            <form class="form-container" method="POST"> 
            <div class="head">
          <h5>Update</h5>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="nam" class="form-control" placeholder="Enter your name" value=<?php echo $sname?>> 
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile no.</label>
    <input type="text" name="mob" class="form-control" value=<?php echo $smobile?> >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value=<?php echo $semail ?>  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" placeholder="*************">
  </div>    
  <div class="form-floating">
  <textarea class="form-control" value=<?php echo $saddress ?>   name="add" ><?php echo $saddress ?></textarea>
  <label for="floatingTextarea">City</label>
</div>
<input type="submit" value="Update" name="update" class="btn btn-primary"  >
  <!-- <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button> -->
  <!-- <button type="submit" class="btn btn-primary btn-block">Signup</button> -->
</form>
        </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
  $saddress=$_POST['add'];

  $sql="update Students set Name='$sname',Email='$semail',Password='$spassword',Mobile='$smobile',Address='$saddress' where Id='$sid';";
  echo $sql;
 $q=mysqli_query($conn,$sql);
  if($q){
    echo "data is updated";
   header('Location:dash.php');
  }
else
{
  echo "Error in update";
}
mysqli_close();
}

?> 