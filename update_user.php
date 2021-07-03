
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="AssetsM.css">
    <link rel="Scripts" type="text/javascript" href="validation.js">

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

</head>

<?php
  include'./incs/assetdatabase.php';

  if($_GET['id'] && is_numeric($_GET['id'])){

    //Getting asset item details from db table
    $ass_id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id='$ass_id'";
    $get_user = mysqli_query($conn,$select);

?>

<body  class="">

    <!-- Header -->
      <header id="header">
        <a class="logo" href="#Home.html">Asset Management System</a>
       <nav >
        <a href="Home.html">Log Out</a>

        </nav>
      </header>
 <nav id= "menu">
    
        </nav>
<!--top nav-->
<div class="topnav">      
  <a  href="Home.html">Home</a>
  <a href="tryoutsAM.html" >Dashboard</a>
  <a href="Assets_page.php" class="active">Assets</a>
  <a href="profile.php">Profile</a>
 
</div>

<section class="wrapper" style="background-image: url('infoguard_assetsmng.jpg'); background-repeat: no-repeat; background-size: 100%; height: 300px;">
      
      </section>
<section class="wrapper" style="height: 5px">
        <div class="inner" >
          <header class="special">
            <h2>Update Profile</h2> 
          </header>
        </div>
      </section>

<div class="inner" >
  <a href="profile.php"  class="border2" > Back </a>
</div>

<br></br>

      <!-- PHP and Editing Form Starts Here-->
      <center >


  <div class="inner"> 
<?php
  //Displaying asset item details in a form for updating

  while($urow = mysqli_fetch_assoc($get_user)){
?>
  <form action="profile_p.php" method="post" style="background-color: #808000; padding: 20px; width:650px; color: white; font-weight: bold; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; font-size: 13pt; border-radius: 15px;">
 <table>
    
     <input type="hidden" name="id" value="<?php echo $urow['id']; ?>" />
     <div class="group" style="padding: 6px 6px;"><br />
      <label class="label" for="User Name"> Username Name:</label> 
      <input type="text" placeholder="Please fill in your Full Name" id="Username" name="username" onkeyup="validate();" 
      value="<?php echo $urow['username']; ?>" >
      <div id="errUsername"></div>
      </div>

      <div class="group"><br />
      <label class="label" for="companyname"> Company Name:</label>
      <input type="text" name="companyname" value="<?php echo $urow['companyname']; ?>" id='CompanyName' onkeyup="validate();" />
          <div id="errCompanyName"></div>
      </div>

       <div class="group"><br />
      <label class="label" for="phonenumber"> Phone Number:</label>
      <input type="text" name="phonenumber" value="<?php echo $urow['phonenumber']; ?>" id='PhoneNumber' onkeyup="validate();" />
        <div id="errPhoneNumber"></div>
      </div>

       <div class="group"><br />
      <label class="label" for="password"> Password:</label> 
      <input type="password"  name="password" value="<?php echo $urow['password']; ?>" id='Password' onkeyup="validate();"/>
        <div id="errPassword"></div>
      </div>

      <div class="group"><br/>
          <label for="RepeatPassword" class="label">Repeat Password</label>
          <input type="password" class="input" data-type="password" id="RepeatPassword" onkeyup="validate();"/>
        <div id="errRepeatPassword"></div>
        </div>

       <div class="group"><br />
      <label class="label" for="email"> Email:</label> 
      <input type="text"  name="email" value="<?php echo $urow['email']; ?>" id='EmailAddress'
      onkeyup="validate();"/>
        <div id="errEmailAddress"></div>
        </div>
      </div>

       <div class="group"><br />
              
      <input type="submit" name="submit" class="button" value="Update" onclick="validate();finalValidate();" style="background-color: #000d00;" />
        <div id="errFinal"></div>
      </div>
     </table>
  </form>
  <?php
}
  ?>
</div>
</center>
<br></br>
<!-- footer-->
      <footer id="footer">
        <div class="inner">
          <div class="content">
            <section>
              <h3>Asset Management System</h3>
              <p><em>Track and Manage Your Assets</em></p>
            </section>
            <section>
              <h4>Quick Links</h4>
              <ul class="alt">
                <li><a href="tryouts.html">Dashboard</a></li>
                <li><a href="Assets_page.php">Assets</a></li>
                
                
              </ul>
            </section>
            <section>
              <h4>Follow us on our social media pages</h4>
              <ul class="plain">
               
                <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
              </ul>
            </section>
          </div>
          <div class="copyright">
            &copy; This work Belongs to Vuma Africa, Thank You.
          </div>
        </div>
      </footer>

    <!-- Scripts -->
      <script src="validation.js"></script>
     <!-- <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script> -->
<?php
}
?>
</body>
</html>

