<?php  
if(isset($_COOKIE["name"])) {  
    echo "<br>Cookie Value: " . $_COOKIE["name"];
    echo "<br>"  ;
    echo "age is ".$_COOKIE["age"];
    
} else {  
    echo "Sorry, cookie is not found!"; 
}  
?> 