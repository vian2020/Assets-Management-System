<?php
//creating database coonection
include'./incs/assetdatabase.php';

$username = $_POST['username'];
$companyname= $_POST['companyname'];
$phonenumber= $_POST['phonenumber'];
$password= $_POST['password'];
$email=$_POST['email'];
//$datetime=$_POST['$date'];

//$date = date('Y-m-d H:i:s');


$enter="INSERT INTO users(username, companyname, phonenumber, password, email,created)
VALUES('$username', '$companyname', '$phonenumber', '$password', '$email', NOW())";

$check = mysqli_query($conn,$enter);

if (isset($check)) {
    echo "You have logged in";
   header("location:tryoutsAM.html");
} //else {
   // echo "Invalid inputs";
//}



?>