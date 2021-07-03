<?php
session_start();

//include connection file
include'./incs/assetdatabase.php';

//Assets code auto generation
$prefix = 'AMS';
$time = time('ymd');
//$num= 0;


$output='';
	$message='';
	$aname= mysqli_real_escape_string($conn, $_POST["aname"]);
	$code= mysqli_real_escape_string($conn, $prefix.'-'.$time);
	$barcode= mysqli_real_escape_string($conn, $_POST["barcode"]);
	$type= mysqli_real_escape_string($conn, $_POST["type"]);
	$pname= mysqli_real_escape_string($conn, $_POST["pname"]);
	$location= mysqli_real_escape_string($conn, $_POST["location"]);
	$purdate= mysqli_real_escape_string($conn, $_POST["purdate"]);
	$supplier= mysqli_real_escape_string($conn, $_POST["supplier"]);
	$amount= mysqli_real_escape_string($conn, $_POST["amount"]);
	$status= mysqli_real_escape_string($conn, $_POST["status"]);





// //Assets code auto generation
// $prefix = 'AMS';
// $time = time('ymd');
// //$num= 0;

// $aname=$_POST['aname'];
// //$code=$_POST['code'];
// $code = $prefix.'-'.$time;
// $barcode=$_POST['barcode'];
// $type=$_POST['type'];
// $pname=$_POST['pname'];
// $location=$_POST['location'];
// $purdate=$_POST['purdate'];
// $supplier=$_POST['supplier'];
// $amount=$_POST['amount'];
// $status=$_POST['status'];

$add="INSERT INTO assets( aname, code, barcode, type, pname, location, purdate, supplier, amount, status) 
VALUES('$aname', '$code', '$barcode', '$type', '$pname', '$location', '$purdate', '$supplier', '$amount', '$status')";
$message= '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:silver; color: white;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong> Data is submitted successfully! </strong>  
</div>';

if(mysqli_query($conn,$add)){
	$output .= '
		<table style="width: 95%;">

		<tr style="color:black; font-weight: bold; ">
			<th> Asset Name</th>
			<th width="165px"> Asset Code</th>
			<th>Barcode</th>
			<th> Type</th>
			<th> Person Name</th>
			<th>Location</th>
			<th > Purchase Date</th>
			<th> Supplier</th>
			<th width="140px">Amount TZS</th>
			<th> Status</th>
			<th width="285px"> Actions</th>
		</tr>
	';
}


if (isset($output)) {
   //echo "<script type='text/javascript'>alert('$message');</script>";

	$_SESSION['msg'] = $message;

header("location:Assets_page.php");
}
?>
