<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li {
            float: left;

        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #CA642D;
        }
    </style>
    
  </head>
  <body>
    <ul>
        <li style="margin-left: 714px;" class=""><a href="../Home/main.html">Home</a></li>
        <li class=""><a href="../Login/main.html">Login</a></li>
        <li class="active"><a href="../SignUp/main.html">Sign Up</a></li>
        <li class=""><a href="../Catalogue/main.html">Catalogue</a></li>
        <li class=""><a href="../Cart/main.html">Cart</a></li>
        <li><a href="./main.html">Logout</a></li>

    </ul>
 
    <div class="main-block">
    
      <form name="myform" method="post" runat="server" action="insertData.php"  onsubmit="return validateform()" >
        <div class="title">
          <img src="./regis1.png" style="width: 70px;position: relative;left: 129px;">
        </div>
        <div class="info">
          <input class="name" type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="tel"  name="phone" placeholder="Phone number">
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox" id="checkBox"><span>I agree to the Privacy Policy for<a href="#"> Hvs911.</a></span>
        </div>
     <button type="submit"  name="sendNewSms" class="inputButton"  id="submitButton" value="Send" >Send</button>
  
     <script>  
      function validateform(){  
      var name=document.myform.name.value;  
      var password=document.myform.password.value; 
      var email=document.myform.email.value;  
      var number = document.myform.phone.value;
          
            var len = number.length;
      if (name==null || name==""){  
        alert("Name can't be blank");  
        return false;  
      }
      
      else if(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(email) == false){  
        alert('Invalid Email Address');
        return (false);
      }  
      else if(number == "" || number == null || len != 13){  
        alert("Not a valid Phone Number");
        return false;
      } 
      else if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
      }   
      }  
      </script>  
      </form>
    </div>
  </body>
</html>