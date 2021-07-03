<?php
//creating database coonection
include'./assetdatabase.php';

$username= $_POST['username'];
$password=$_POST['password'];

$login= "SELECT * FROM users
           WHERE username='$username' AND password = '$password'
          LIMIT 1";

$check=mysqli_query($conn,$login);

$find_user = mysqli_num_rows($check);

if ($find_user == 0) {
	
     echo 'Invalid username or password';

}else{

	echo "You have logged in";
   header("location:tryoutsAM.html");
}




?>