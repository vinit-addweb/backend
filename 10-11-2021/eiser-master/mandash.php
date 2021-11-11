<?php
include 'main.php';
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* add product  */
        .product{
          margin:7px;
        }
        /* logout button */

          .logout input{
            position:absolute;
            right: 10px;
            top:8px;
          } 
          .btn1{
    background: #71cd14;
    border: 1px solid #71cd14;
}
          .btn1:hover{
    background: transparent;
    color: #71cd14;
    border: 1px solid #71cd14;
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
    width: 97%;
    margin-bottom: 1rem;
    color: #212529;
    vertical-align: top;
    border-color: #dee2e6;
    margin-left:1%;
    margin-top:50px;
    text-align:center;
}
.table ,td,th{
  padding:30px;
}
 i{
  padding:2px;
}


    </style>
</head>
<body>
<div class="top"> 

<div class="product">
<form method='POST'>
          <input type="submit" value="Add product" name="product" class="btn btn-primary btn1">
          </form>
          </div>
      <div class="logout">
          <form method='POST'>
          <input type="submit" value="Logout" name="logout" class="btn btn-primary btn1">
          </form>
          </div>
          </div>
        

<?php 
$cat=$_GET['cat'];

    include 'main.php';

    $semail = $_SESSION['email'];
    $query = mysqli_query($conn,"select * from $cat") or die("Error in query");
    
    $sql ="select Name from seller where Email ='$semail'";
    
    $q1 = mysqli_query($conn,$sql); 
    $r = mysqli_fetch_array($q1);
    
    echo "<center><b><h3>Welcome ".$r["Name"]."</center>";
   

    echo "<table class='table table-striped'>
    <thead>
      <tr>
        <th scope='col'>ID</th>
        
        <th scope='col'>Name</th>
        <th scope='col'>Catagery</th>
        <th scope='col'>Discription</th>
        <th scope='col'>Price</th>
        <th scope='col'>Color</th>
        <th scope='col'>Image</th>
        <th scope='col'>Action</th>
        
      </tr>
    </thead>
    <tbody>";
   
   
    while($row=mysqli_fetch_array($query))
    {
        $s_id=$row['proid'];
        echo "<tr>";
        echo "<td>".$row['pro_id']."</td>";
       
        echo "<td>".$row['pro_name']."</td>";
        echo "<td>".$row['sub_catagory']."</td>";
        echo "<td>".$row['pro_description']."</td>";
        echo "<td>".$row['pro_price']."</td>";
        echo "<td>".$row['pro_color']."</td>";
        echo "<td><img src=".$row['pro_img']."height=100 width=100></td>";
        echo "<td>"."<a href='update.php?s_id=$s_id'><i class='fas fa-eye'></i></a>". "". "<a href='editpro.php?s_id=$s_id'><i class='fas fa-edit'></i></a>".""."<a href='delete.php?s_id=$s_id'><i class='far fa-trash-alt'></i></a>"
        ;

       
    }       
    echo "</tbody></table></center>";
    }
    mysqli_close($conn);
?>
<?php
if(isset($_POST['logout'])){
    header('Location:logout.php');
}
elseif(isset($_POST['product'])){
  header('Location:addproducts.php');
}
?>

</body>
</html>