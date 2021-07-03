<!DOCTYPE html>
<html>
<head>
  <title>Sign Up| Admin</title>
<link href = "type1.css" rel = "stylesheet" type="text/css" >


    
  
</head>

<body style= "background-color: black;" >
 <!--background-image: url('IMG-20191217-WA0012.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100% -->

         <div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>


<center>
  <p><h1 style="font-family: cursive; font-size: 50pt; color: white">Asset Management System</h1></p>
  
</center>
<div class="login-wrap" >
   
   <div class="login-html">

   <!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in</label>-->
    <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
     
      <!-- The Sign Up Part Starts id="sign-up"-->

      <div class="sign-up-htm">         
        <script type="text/javascript">
    var divs = new Array();
    divs[2] = "errUsername";
    divs[3] = "errCompanyName";
    divs[4] = "errPhoneNumber";
    divs[5] = "errPassword";
    divs[6] = "errRepeatPassword";
    divs[7] = "errEmailAddress";
    function validate()
  {
      var inputs = new Array();
      inputs[2] = document.getElementById('Username').value;
      inputs[3] = document.getElementById('CompanyName').value;
      inputs[4] = document.getElementById('PhoneNumber').value;
      inputs[5] = document.getElementById('Password').value;
      inputs[6] = document.getElementById('RepeatPassword').value;
     inputs[7] = document.getElementById('EmailAddress').value;

      var errors = new Array();
      errors[2] = "<span style='color:red'>*</span>";
      errors[3] = "<span style='color:red'>*</span>";
      errors[4] = "<span style='color:red'>*</span>";
      errors[5] = "<span style='color:red'>*</span>";
      errors[6] = "<span style='color:red'>*</span>";
      errors[7] = "<span style='color:red'>*</span>";
    
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
          document.getElementById(div).innerHTML = errMessage;
        else if (i==7)
        {
          var atpos=inputs[i].indexOf("@");
          var dotpos=inputs[i].lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
          document.getElementById('errEmailAddress').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else if (i==6)
        {
          var first = document.getElementById('Password').value;
          var second = document.getElementById('RepeatPassword').value;
          if (second != first)
          document.getElementById('errRepeatPassword').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else
          document.getElementById(div).innerHTML = " ";
       }
     }
        function finalValidate()
        {
          var count = 2;
          for(i=2;i<8;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == " ")
            count = count + 1;
          }
          if(count == 8)
            document.getElementById("errFinal").innerHTML = " ";
        }
   </script>
<form action="signupchecker.php" method="post">
         <div class="group" >
          <label for="Username" class="label">Username</label>
          <input  type="text" class="input" id="Username" name="username" placeholder="Please fill in your Full Name" style="font-size: 13pt; font-weight: bold;" onkeyup="validate();" />
          <div id="errUsername"></div>
        </div>

        <div class="group" >
          <label for="CompanyName" class="label">Company Name</label>
          <input  type="text" class="input" id="CompanyName" name="companyname" onkeyup="validate();" />
          <div id="errCompanyName"></div>
        </div>

  
        <div class="group">
          <label for="PhoneNumber" class="label">Phone number</label>
          <input id="PhoneNumber" type="tel" class="input" data-type="tel" name="phonenumber" onkeyup="validate();" />
        <div id="errPhoneNumber"></div>
        </div>
        
        <div class="group">
          <label for="Password" class="label">Password</label>
          <input type="password" class="input" data-type="password" id="Password" name="password" onkeyup="validate();"/>
        <div id="errPassword"></div>
        </div>
        <div class="group">
          <label for="RepeatPassword" class="label">Repeat Password</label>
          <input type="password" class="input" data-type="password" id="RepeatPassword" onkeyup="validate();"/>
        <div id="errRepeatPassword"></div>
        </div>
        <div class="group">
          <label for="EmailAddress" class="label">Email Address</label>
          <input type="email" class="input"  id="EmailAddress" name="email" onkeyup="validate();"/>
        <div id="errEmailAddress"></div>
        </div>
        <div class="group">
          <form action="tryoutsAM.html">
          <input type="submit" class="button" value="Sign Up"  id="Sign Up" name="signup" onclick="validate();finalValidate();"/>
        <div id="errFinal"></div></form>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">By Vuma Africa</a></label>
        </div>
      </div> 
    </form>
    </div>
  </div>
</div>



  </div> 
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

  <!--  #B19CD9  Navigation plane   #CDB7F6-->

  <header id="header" class="header-right">       
    <nav>
<nav id="main" >
        


        <div >
  <a href="Home.html"  style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Home</a>
<!--   <a href="#elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" >Dashboard</a>
<a href="#generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Assets Info</a>
          <a href="#multiplicaation.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Profile</a> -->
          <a href="Admin_login.php" class="active" style="color:  #D292C1;">Sign Up</a> 
           <a href="#file:///C:/Users/annam/OneDrive/Desktop/Campus%20guide%202/index.html#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a>

</div>
</nav>
</nav>
      </header>
<!-- End of Navigation-->


  </div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>

</html>