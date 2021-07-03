<?php
session_start();
header('Content-Type:application/json');
//Creating db connection
include'./incs/assetdatabase.php';

if (isset($_POST["id"]))
 {
  $id = $_POST['id'];
  $pd='';
  $sql = "SELECT * FROM users WHERE id = '".$_POST["id"]."'";
  $query = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($query)){
    $pd .=' <form action="update_p.php" id="update_form" method="post">
            <table>
            <input type="hidden" name="id" id="id" value= '.$row['id'].'/>

         <div class="group" style="padding: 6px 6px;"><br />
            <label class="label" for="User Name"> Username Name:</label> 
            <input type="text" placeholder="Please fill in your Full Name" id="username" value= '.$row['username'].' name="username" onkeyup="validate();">
              <div id="errusername"></div>
         </div> ';

   $pd .='      <div class="group"><br />
              <label class="label" for="companyname"> Company Name:</label>
              <input type="text" onkeyup="validate();" name="companyname" id="companyname" value= '.$row['companyname'].'  >
                <div id="errcompanyname"></div>
         </div>
          ';
    $pd .='     <div class="group"><br />
            <label class="label" for="phonenumber"> Phone Number:</label>
            <input type="text"  onkeyup="validate();" name="phonenumber" id="phonenumber" value= '.$row['phonenumber'].'>
              <div id="errphonenumber"></div>
         </div>

         <div class="group"><br />
            <label class="label" for="password"> Password:</label> 
            <input type="password" onkeyup="validate();" name="password"  id="password" value= '.$row['password'].' >
              <div id="errpassword"></div>
         </div>
          ';
    $pd .='
         <div class="group"><br/>
              <label for="RepeatPassword" class="label">Repeat Password</label>
              <input type="password" class="input" onkeyup="validate();" data-type="password" id="RepeatPassword" >
              <div id="errRepeatPassword"></div>
         </div>

         <div class="group"><br />
            <label class="label" for="email"> Email:</label> 
            <input type="text" onkeyup="validate();" name="email"  id="email" value= '.$row['email'].'>
              <div id="erremail"></div>
         </div>
         ';
    $pd .= '
         <div class="group"><br/>
           <button type="submit" class="btn btn-primary" name="submit" id="submit" onclick="validate();finalValidate();" style="background-color: #000d00;" />Update</button>
               <div id="errFinal"></div>
        </div>

  </table>
      </form>
    ';
  }
  echo $pd;

}
  // echo json_encode($row);
//Form variables
// $id = $_POST['id'];
// $username=$_POST['username'];
// $companyname=$_POST['companyname'];
// $phonenumber=$_POST['phonenumber'];
// $password=$_POST['password'];
// $email=$_POST['email'];




?>