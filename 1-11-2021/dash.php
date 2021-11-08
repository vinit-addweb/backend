<?php
ob_start();
session_start();
if($_SESSION['email']==''){
    header('Location:login.php');
}
else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* logout button */

          .logout input{
            position:absolute;
            right: 10px;
            top:8px;
          } 
        /* table */
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
}

    </style>
</head>
<body>
<div class="top">  
      <div class="logout">
          <form method='POST'>
          <input type="submit" value="Logout" name="logout" class="btn btn-primary">
          </form>
          </div>
          </div>
        
</body>
</html>
<?php 
    include 'main.php';

    $semail = $_SESSION['email'];
    $query = mysqli_query($conn,"select * from Students") or die("Error in query");
    
    $sql ="select Name from Students where Email ='$semail'";
    
    $q1 = mysqli_query($conn,$sql); 
    $r = mysqli_fetch_array($q1);
    
    echo "<center><b><h3>Welcome ".$r["Name"]."</center>";
    echo"<table class='table'>
    <thead>
      <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Name</th>
        <th scope='col'>Mobile</th>
        <th scope='col'>Email</th>
        <th scope='col'>Password</th>
        <th scope='col'>Address</th>
        <th scope='col'>Edit</th>
        <th scope='col'>Delete</th>
      </tr>
    </thead>";
    // echo"<center><table border=2><tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Password</th><th>Address</th><th>Edit</th><th>Delete</th></tr>";
    while($row=mysqli_fetch_array($query))
    {
        $s_id=$row['Id'];
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Mobile']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Password']."</td>";
        echo "<td>".$row['Address']."</td>";
        
        echo "<td><a href='update.php?s_id=$s_id'>Edit</a></td>";
        echo "<td><a href='Delete.php?s_id=$s_id'>Delete</a>.</td>";
    
    }       
    echo "</table></center>";
    }
    mysqli_close($conn);
?>
<?php
if(isset($_POST['logout'])){
    header('Location:logout.php');
}
?>