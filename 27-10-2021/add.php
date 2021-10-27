<html>
<body>
<form method="get">
First Name: <input type="text" name="val1">  <br />

Last Name: <input type="text" name="val2" />
<input type="submit" value="add" name="Add"/>
<input type="submit" value="aub" name="Sub" />
<input type="submit" value="multi" name="Multi" />
</form>
</body>
</html>

<?php

if(isset($_GET['Add']))
{
    $a=$_GET['val1'];
    $b=$_GET['val2'];
    $c=$a+$b;
    echo $c;
   // header('Location:add.php');
}
else if(isset($_GET['Sub']))
{
    $a=$_GET['val1'];
    $b=$_GET['val2'];
    $c=$a-$b;
    echo $c;
    //header('Location:sub.php');

}
else if(isset($_GET['Multi']))
{
    $a=$_GET['val1'];
    $b=$_GET['val2'];
    $c=$a*$b;
    echo $c;
    //header('Location:mul.php');
}

?>