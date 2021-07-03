<!DOCTYPE html>
<html>
<head>
  <title>Log In | Admin</title>
<link href = "type1.css" rel = "stylesheet" type="text/css" >
  
</head>

<body style= "background-color: white;"><!--background-image: url('IMG-20191217-WA0012.jpg'); background-position: center; background-repeat: no-repeat; background-size: 100%"  -->

   <style> 

</style>     
        




         <div id="main">
  <button class="openbtn" onclick="openNav()">☰ Menu</button>


<center>
  <p><h1 style="font-family: cursive; font-size: 50pt; color: black">Asset Management System</h1></p>
  
</center>
<div class="login-wrap" >
   
  <div class="login-html">

   <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in</label> 
 <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><!--Sign Up--></label> 
    <div class="login-form">
      <div class="sign-in-htm">
        <script type="text/javascript">
    var divs = new Array();
    divs[0] = "errFUsername";
    divs[1] = "errFPassword";
    function validate()
  {
      var inputs = new Array();
      inputs[0] = document.getElementById('FUsername').value;
      inputs[1] = document.getElementById('FPassword').value;
      errors[0] = "<span style='color:red'>*</span>";
      errors[1] = "<span style='color:red'>*</span>";
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
          document.getElementById(div).innerHTML = errMessage;
      
        else if (i==1)
        {
          var first = document.getElementById('FPassword').value;
       
         document.getElementById('errFPassword').innerHTML = "<span style='color: red'>Incorrect Password!</span>";
          else
          document.getElementById(div).innerHTML = " ";
       // }
        else
          document.getElementById(div).innerHTML = " ";
       }
     }
        function finalValidate()
        {
          var count = 0;
          for(i=0;i<2;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == " ")
            count = count + 1;
          }
          if(count == 2)
            document.getElementById("errFinal").innerHTML = "All the data you entered is correct!!!";
        }
   </script>
        <div class="group"> 
          <br></br>
        <form action="login_checker.php" method="POST">
          <label for="FUsername" class="label">Username</label>
          <input id="FUsername" name="username" type="text" class="input" onkeyup="validate();" />
        <div id="errFUsername"></div>
        </div>

        <br></br>

        <div class="group">
          <label for="FPassword" class="label">Password</label>
          <input id="FPassword" type="password" name="password" class="input" data-type="password" onkeyup="validate();" />
        <div id="errFPassword"></div>
        </div>

        <br></br>

        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me logged in</label>
        </div>

        <br></br>

        <div class="group"><form action="tryoutsAM.html">
          <input type="submit" class="button" name="login" value="Log In" id="Sign In" onclick="validate();finalValidate();"/>
        <div id="errFinal"></div></form>
        </div>
        <div>
        <h3>Do not have an account? <strong><a style="color:white" href="Admin_Sign_Up.php">Create account.</a></strong></h3>
        
        <br></br>
        <center>
         <a href="#forgot">Forgot Password?</a>
       </center>
       </div>
        <div class="hr"></div>
         <div class="foot-lnk">
          
          <label for="tab-1">By Vuma Africa</a></label>

        </div>
      </div>
    </form>
      <!-- The Sign Up Part Starts id="sign-up"-->

  
      </div> 
    
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
 <!--  <a href="#elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" >Dashboard</a>
<a href="#generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Assets Info</a>
          <a href="#multiplicaation.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Profile</a> --->
          <a href="Admin_login.php" class="active" style="color:  #D292C1;">Log In</a> 
           <a href="file:///C:/Users/annam/OneDrive/Desktop/Campus%20guide%202/index.html#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a>

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