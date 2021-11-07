<?php
if(empty($_POST["rem"])) {
    setcookie("username","");
    setcookie("password","");
    echo "Cookies Not Set";
} else {
    setcookie ("username",$_POST["username"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Cookies Set Successfuly";
}


?>
