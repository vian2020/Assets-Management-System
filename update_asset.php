<?php
session_start();
//Creating db connection
include'./incs/assetdatabase.php';
// updating asset through ajax
if(!empty($_POST))
{
	$output='';
	$message='';
	$aname= mysqli_real_escape_string($conn, $_POST["aname"]);
	$code= mysqli_real_escape_string($conn, $_POST["code"]);
	$barcode= mysqli_real_escape_string($conn, $_POST["barcode"]);
	$type= mysqli_real_escape_string($conn, $_POST["type"]);
	$pname= mysqli_real_escape_string($conn, $_POST["pname"]);
	$location= mysqli_real_escape_string($conn, $_POST["location"]);
	$purdate= mysqli_real_escape_string($conn, $_POST["purdate"]);
	$supplier= mysqli_real_escape_string($conn, $_POST["supplier"]);
	$amount= mysqli_real_escape_string($conn, $_POST["amount"]);
	$status= mysqli_real_escape_string($conn, $_POST["status"]);
		if($_POST["id"] != '')
		{
			$edit = "UPDATE assets SET aname='$aname', code='$code', barcode='$barcode', type='$type', pname='$pname', location='$location', purdate='$purdate',supplier='$supplier', amount='$amount', status='$status' WHERE id='".$_POST["id"]."'";
	$message= '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:silver; color: white;">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	  <strong>The Asset is successfully UPDATED! </strong>  
	</div>';
		}
	else
		{
			$edit="INSERT INTO assets( aname, code, barcode, type, pname, location, purdate, supplier, amount, status) 
	VALUES('$aname', '$code', '$barcode', '$type', '$pname', '$location', '$purdate', '$supplier', '$amount', '$status')";
	$message= '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:silver; color: white;">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	  <strong>The Asset is successfully INSERTED! </strong>  
	</div>';
		}
	if(mysqli_query($conn,$edit))
	{
		$output .='<p> success</p>';
		$select_edit = "SELECT * FROM assets ORDER BY id DESC";
		$result = mysqli_query($conn, $select_edit);
		$output .= '
						    	<form action="updateSingleAsset.php" method="post" >
        <input type="hidden" name="id" id="id" />

		';

		while($row = mysqli_fetch_array($result))
	{
		$output .= '
		 <div class="group" style="padding: 6px 6px;"><br />
		 	<label class="label" for="Asset Name"> Asset Name:</label> 
		 	<input type="text" name="aname" id='.$row["aname"].' >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="code"> Asset Code:</label>
		 	<input type="text" id='.$row["code"].' name="code" >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="barcode"> Barcode:</label> 
		 	<input type="text" id='.$row["barcode"].' name="barcode">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Asset Type"> Asset Type:</label> 
		 	<input type="text" id='.$row["type"].' name="type">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Person Name"> Person Name:</label>
		 	<input type="text" id='.$row["pname"].' name="pname">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="location"> Location:</label>
		 	<input type="text" id='.$row["location"].' name="location" >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="purdate"> Purchase Date:</label>
		 	<input type="date" name="purdate" id='.$row["purdate"].'>		 	
		 	</div>

		 	 <div class="group"> <br />
		 	<label class="label" for="supplier"> Supplier:</label>
		 	<input type="text" name="supplier" id='.$row["supplier"].'>
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="amount"> Amount: TZS</label>
		 	<input type="text" name="amount" id='.$row["amount"].'>
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="status"> Status:</label>
		 	<select name="status">
		 		<option selected="" id='.$row["status"].' New</option>
		 		<option value="New">New</option>
		 		<option value="Depreciating">Depreciating</option>
		 		<option value="Removed">Removed</option>
		 		<option value="None">None</option>
		 	</select>
			</div>
			<div class="group">
				 		<input type="submit" id='.$row["submit"].' name="submit" class="btn btn-primary">Update</button>
			 </div>
			 ';
			}
			$output .= '</form>';
		 }
		
		}
	if($output){
	$_SESSION['msg'] = $message;
	header('location:Assets_page.php');

}

?>


<!-- //Form variables
$id = $_POST['asset_id'];
$aname=$_POST['aname'];
$code=$_POST['code'];
$barcode=$_POST['barcode'];
$type=$_POST['type'];
$pname=$_POST['pname'];
$location=$_POST['location'];
$purdate=$_POST['purdate'];
$supplier=$_POST['supplier'];
$amount=$_POST['amount'];
$status=$_POST['status'];

$statement = "UPDATE assets SET aname='$aname', code='$code', barcode='$barcode', type='$type', pname='$pname', location='$location', purdate='$purdate',supplier='$supplier', amount='$amount', status='$status' WHERE id='$id'";
$message= '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:silver; color: white;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>The Asset is successfully UPDATED! </strong>  
</div>';

$update = mysqli_query($conn,$statement);

if($update){
	$_SESSION['msg'] = $message;
	header('location:Assets_page.php');
//} -->