<?php
session_start();
//creating db connection
include'./incs/assetdatabase.php';


  if($_GET['id'] && is_numeric($_GET['id'])){

    //Getting asset item details from db table
    $ass_id = $_GET['id'];

    $select = "DELETE  FROM users WHERE id='$ass_id'";

$message= '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:silver; color: white;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong> User is DELETED! </strong>  
</div>';


    $delete = mysqli_query($conn,$select);

    if($delete){
$_SESSION['msg'] = $message;

    	echo 'User deleted';
    	header ("location:profile.php");
    }
}
?>