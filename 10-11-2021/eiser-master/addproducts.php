<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Product</title>
    <style>
         .form-container{
             background:#fff;
             padding:30px;
             border-radius:10px;
             box-shadow: 0px 0px 10px 0px #000;
             margin-top: 30px;

         }
         .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 30%;
    padding-right: var(--bs-gutter-x,.75rem);
    padding-left: var(--bs-gutter-x,.75rem);
    margin-right: auto;
    margin-left: auto;
    margin-top: 3px;
    
    
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

label{font-weight: bold;}
.btn1{
    background: #71cd14;
    border: 1px solid #71cd14;
}
.btn1:hover{
    background: transparent;
    color: #71cd14;
    border: 1px solid #71cd14;
}
    </style>
</head>
<body>
 

    <div class="container-fluid">
   
   <div class="row">
       <div class="col-12 col-sm-6 col-md-3"></div>
       <form class="form-container" enctype="multipart/form-data"   method="POST"> 
       <div class="head">
     <h5>Add Product</h5>
</div>




<div class="mb-3">
<label  class="form-label">Product name</label>
<input type="text" name="nam" class="form-control" placeholder="Enter Product name">
</div>
<div class="mb-3">
<label  class="form-label">Product catagery</label>
<input type="text" name="subcat" class="form-control" placeholder="Enter Product name">
</div>

<div class="mb-3">
<label  class="form-label">catagery</label><br>
<select name="cat">
<option value="Select" selected>Select</option>
<option value="accessories" name="Accessories">Accessories</option>
  <option value="clothing" name="Clothings">clothings</option> 
  
  <option value="electronics" name="Electronics">Electronics</option>
  

</select>
<!-- <input type="text" name="cat" class="form-control" placeholder="Enter Product catagery "> -->
</div>

<div class="mb-3">
<label  class="form-label">Price </label>
<input type="text" name= "price"class="form-control"  placeholder="Enter Product price ">

</div>
<div class="mb-3">
<label  class="form-label">Product Color</label>
<input type="text" name="color" class="form-control" placeholder="Enter Product Color">
</div>

<div class="mb-3">
    <label class="form-label">Discription</label>
    <textarea name="dis"  cols="33" rows="4.5" placeholder="Type from here..."></textarea>
    </div>

<label class="form-label">Image Upload</label><br>
<input type="file" name="file">
<button name="insert" value="submit" class="btn btn-primary btn-block btn1"> Submit</button>
</div>




</div> 


</form>
   </div>

</div>
</body>
</html>

<?php
error_reporting(0);
ob_start();
include 'main.php';

if(isset($_POST['insert'])){
   
    $pname = mysqli_real_escape_string($conn,$_POST['nam']);
    $pcat=$_POST['cat'];
    $subcat=$_POST['subcat'];
    $pprice=$_POST['price'];
    $pcolor=$_POST['color'];
    $pdis=mysqli_real_escape_string($conn,$_POST['dis'] );
    $pimg="images/".$_FILES["file"]["name"];   




$sql = "INSERT INTO $pcat (`pro_name`, `sub_catagory`, `pro_description`, `pro_price`, `pro_color`, `pro_img`, `seller_Id`) VALUES ('$pname', '$subcat', '$pdis', '$pprice', '$pcolor', '$pimg', 1) "; 



echo $sql;
$q=mysqli_query($conn,$sql) or die("Error in query");

if($q){
    move_uploaded_file($_FILES["file"]["tmp_name"], $pimg);
    header("Location:mandash.php?cat=$pcat");
    
}
else{
    echo "Error";
}
}
?>