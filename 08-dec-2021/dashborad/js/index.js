
    function Formval() {
        var id = document.forms["dash"]["id"];
        var name = document.forms["dash"]["name"];
        var email = document.forms["dash"]["email"];
        var phone = document.forms["dash"]["mobile"];
        
        var password = document.forms["dash"]["psw"];
        var address = document.forms["dash"]["address"];
  
        var regex = /^[a-zA-Z]+$/;
        var phoneno = /^\d{10}$/;
        var emailval = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        var passval = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;;
        if (id.value == "") {
            window.alert("Please enter your id.");
            name.focus();
            return false;
        }
        
        
        if(regex.test(dash.name.value) == false)
        {
            window.alert("Name must be in alphabets only");
            dash.name.focus();
            return false;
        }

        if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        

        if (address.value == "") {
            window.alert("Please enter your address.");
            address.focus();
            return false;
        }
  
  
        if (phone.value == "") {
            window.alert(
              "Please enter your Mobile number.");
            phone.focus();
            return false;
            
        }
        
          
        
        if(!phone.value.match(phoneno))
        {
            alert("Not a valid Phone Number");
            return false;
        }
       
        if (email.value == "") {
            window.alert(
              "Please enter a valid e-mail address.");
            email.focus();
            return false;
        }

        if(!email.value.match(emailval))
        {
            alert("Not a valid Email-address");
            return false;
        }
        if (password.value == "") {
            window.alert("Please enter your password");
            password.focus();
            return false;
        }
      
        if(!password.value.match(passval))
        {
            window.alert("password must in between 6 to 20 characters");
            return false;
        }
  
        return true;
    }
