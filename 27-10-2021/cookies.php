<?php
   setcookie("name", "vinit", time()+3600, "/","", 0);
   setcookie("age", "23", time()+3600, "/", "",  0);
?>


<?php  
if(!isset($_COOKIE["name"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["name"];  
}  
?> 
