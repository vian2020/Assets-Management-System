<?php
  include'./incs/header.php';

?>
	<title>Assets Page</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>


	<body class="">

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
  <a href="tryoutsAM.html">Dashboard</a>
  <a href="Assets_page.php" class="active"> Assets</a>
  <a href="profile.php">Profile</a>
 
</div>



<section class="wrapper" style="background-image: url('infoguard_assetsmng.jpg'); background-repeat: no-repeat; background-size: 100%; height: 300px; background-position: top; ">
			
			</section>	

			<?php if(isset($_SESSION['msg']))
         echo $_SESSION['msg'];
         unset($_SESSION['msg']);
        ?>	
			<section class="wrapper" style="height: 5px;">
				<div class="inner">
					<header class="special">
						<h2>Asset List Information</h2> 
					</header>
					</div>
				</section>

	<div class="inner" >
	<a href="tryoutsAM.html"  class="border2" > Back </a>
</div>

<div class="inner" style="text-align: right;" >
	
	<a href="addinfo.php" class="border1" > Add Asset</a>
</div>

<br></br>

<!-- table starts with php -->
<center>
<?php
//Getting assets list from db
  $select = "SELECT * FROM assets";
  $getting_all = mysqli_query($conn,$select);

?>

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
			<th width="215px"> Actions</th>
		</tr>
		<?php
        //Checking if db table is empty
       if(mysqli_num_rows($getting_all) == 0){

         echo  '<td>No asset added!!<td>';

       }else{

      while( $rows = mysqli_fetch_assoc($getting_all)){
     ?>
		<tr><div class="form"> 
    
			<td><?php echo $rows['aname']; ?></td>
			<td> <?php echo $rows['code']; ?></td>
            <td><?php echo $rows['barcode']; ?></td>
            <td>  <?php echo $rows['type']; ?></td>
            <td> <?php echo $rows['pname']; ?></td>
            <td> <?php echo $rows['location']; ?></td>
            <td> <?php echo $rows['purdate']; ?> </td>
            <td> <?php echo $rows['supplier']; ?></td>
            <td> <?php echo $rows['amount']; ?> </td>
            <td> <?php echo $rows['status']; ?></td>
            <td>


       <!-- View Asset 
  <a href="view_asset.php?id=<?php echo $rows['id'] ?>"  class="border3"> View</a> -->
<button type="button" class="btn btn-primary view_data" data-toggle="modal" id="<?php echo $rows['id'] ?>" data-target="#view_modal" style="background: darkgreen;"> View </button>&nbsp;
            	
       <!-- Update asset
          <a href="asset_edit_page.php?id=<?php //echo $rows['id'] ?>" class="border4">Edit</a> -->
<button type="button" class="btn btn-primary edit_data" id="<?php echo $rows['id'] ?>" style="background: navy;"> Edit </button>&nbsp;

        <!-- Delete Asset-->
<button type="button" style="background: darkred;" class="btn btn-primary" data-toggle="modal" 
             id="<?php echo $rows['id'] ?>" data-target="#delete_modal">Delete</button>


            </td>
       <?php
   }
}
       ?>
</tr>
</center>

</table>
</div>
<br></br>

<!-- View Asset Modal -->

<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: #570029; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">View Asset</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> 
	      </div>
	      <div class="modal-body">  
	      	<div id="list">

	      	</div>
	     </div>
	     <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     </div>
	  </div>
	</div>
</div>

<!-- View Asset Modal End Here -->

<!-- Edit Asset Modal -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: #4a0e50; padding: 2px; height:850px; color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> 
	      </div>
	      <div class="modal-body">  
	      	<form action="update_asset.php" method="post">
	        		<input type="hidden" id="asset_id" name="asset_id" value=""/>
			 	<div class="group" style="padding: 6px 6px;"><br />
				 	<label class="label" for="Asset Name"> Asset Name:</label> 
				 	<input type="text" id="aname" value="" name="aname" >
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="code"> Asset Code:</label>
				 	<input type="text" id="code" name="code">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="barcode"> Barcode:</label> 
				 	<input type="text" id="barcode" name="barcode">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="Asset Type"> Asset Type:</label> 
				 	<input type="text" id="type" name="type">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="Person Name"> Person Name:</label>
				 	<input type="text" id="pname" name="pname">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="location"> Location:</label>
				 	<input type="text" id="location" name="location" value="">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="purdate"> Purchase Date:</label>
				 	<input type="date" name="purdate" id="purdate">
			 	</div>

				<div class="group"> <br />
				 	<label class="label" for="supplier"> Supplier:</label>
				 	<input type="text" name="supplier" id="supplier">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="amount"> Amount: TZS</label>
				 	<input type="text" name="amount" id="amount">
			 	</div>

			 	 <div class="group"><br />
				 	<label class="label" for="status"> Status:</label>
				 	<select name="status" >
				 		<option selected="" id="status">New</option>
				 		<option value="new">New</option>
				 		<option value="depreciating">Depreciating</option>
				 		<option value="removed">Removed</option>
				 		<option value="none">None</option>
				 	</select>
			 	</div>
			 	<div class="group">
			 		<button type="submit" id="btn-submit" class="btn btn-primary">ADD</button>
			 	</div>
		 	</form>
		 </div>
	     <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     </div>

	  </div>
	</div>
</div>
<!-- Edit Asset Modal Ends Here -->

<!-- Delete Asset Modal Starts Here-->

<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: darkred; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Delete Asset</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button> 
	      </div>
	      <div class="modal-body"> 
	      <p>Are you sure you want to Delete the following Asset?</p> 
	      	<div id="list">
	      	</div>
	     </div>
	     <div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Yes</button>
	     </div>
	  </div>
	</div>
</div>

<!-- Delete Asset Modal End Here -->

						
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

		//When view button clicked
		$('.view_data').click(function() {
			var id = $(this).attr('id');
			$.ajax({
				url: "viewSingle.php",
				method: "post",
				data: {id: id},
				success: function(response) {
					$('#list').html(response);
					$('#view_modal').modal('show');
				}
			});
		});

		//When view button clicked
		$('.edit_data').click(function() {
			var id = $(this).attr('id');
			 $.ajax({
			 	url: "updateSingleAsset.php",
				method: "post",
				data: { id: id },
				dataType: "json",
				success: function(data) {
					$('#aname').val(data.aname);
			 		$('#edit_modal').modal('show');
				}
			 });
		});

	});
</script>

<?php include'./incs/footer.php'; ?>


<a href="delete_asset.php?id=<?php echo $rows['id'] ?>" type="button" style="background: darkred;" class="btn btn-primary delete_data" >Delete</a>

alert(" Delete Asset?");