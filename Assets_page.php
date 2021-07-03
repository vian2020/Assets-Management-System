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

<!-- <div class="inner" style="text-align: right;" >
	
	<a href="addinfo.php" class="border1" > Add Asset</a>
</div> -->

<br></br>

<!-- table starts with php -->
<center>
<?php
//Getting assets list from db
  $select = "SELECT * FROM assets";
  $getting_all = mysqli_query($conn,$select);

?>



<div style="background-color: white; padding: 20px; width:1400px;color: black; font-weight: bold; font-size: 13pt;border: 1px none; border-radius: 15px; box-shadow: -4px 4px 4px 6px silver; "> <!-- -->


<button type="button" class="btn btn-secondary float-right add_data" id="add" value="add" name="add" data-target="#add_modal" style=" background-color: #c62828;">Add Asset</button>

<br><br/>

	<table style="width: 100%;">



		<tr style="color:black; font-weight: bold; ">
			<th> Asset Name</th>
			<th width="165px"> Asset Code</th>
			<th>Barcode</th>
			<th> Type</th>
			<th> Person Name</th>
			<th>Location</th>
			<th > Purchase Date</th>
			<th> Supplier</th>
			<th width="110px">Amount TZS</th>
			<th> Status</th>
			<th width="225px"> Actions</th>
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


			       <!-- View Asset -->
				<button type="button" class="btn btn-primary view_data" data-toggle="modal" name="view"  id="<?php echo $rows["id"]; ?>" data-target="#view_modal" style="background: darkgreen;">View</button>&nbsp;
				            	
				       <!-- Update asset class="border4"-->
				<button type="button"  class="btn btn-primary edit_data" id="<?php echo $rows["id"]; ?>" style="background: navy;" data-target="#edit_modal"> Edit </button>&nbsp; 

		        		<!-- Delete Asset-->
		        <a href="delete_asset.php?id=<?php echo $rows['id'] ?>" type="button" style="background: darkred; height: 50px;" class="btn btn-primary" id="delete_data" data-target="#delete_modal"  onClick="return confirm('Are you sure you want to delete?')">Delete</a>
	 

            </td>
					       <?php
					   }
					}
					       ?>
		</div></tr>

	</table>
</div>
</center>

<br></br>


<!-- Add Asset Modal -->

<div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: #1c4966; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Asset</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button> 
		    </div>
		    <div class="modal-body">

		    			    	<form action="assetinfo.php" method="post" >
        <input type="hidden" name="add" id="add" />

		    <div class="group"><br />
		 	<label class="label" for="Asset Name"> Asset Name:</label> 
		 	<input type="text" name="aname"  >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="barcode"> Barcode:</label> 
		 	<input type="text"  name="barcode">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Asset Type"> Asset Type:</label> 
		 	<input type="text" name="type">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Person Name"> Person Name:</label>
		 	<input type="text" name="pname">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="location"> Location:</label>
		 	<input type="text" name="location" >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="purdate"> Purchase Date:</label>
		 	<input type="date" name="purdate" >
		 	</div>

		 	 <div class="group"> <br />
		 	<label class="label" for="supplier"> Supplier:</label>
		 	<input type="text" name="supplier" >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="amount"> Amount: TZS</label>
		 	<input type="text" name="amount">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="status"> Status:</label>
		 	<select name="status">
		 		<option selected="" >New</option>
		 		<!-- <option value="new">New</option>
 -->		 	<option value="depreciating">Depreciating</option>
		 		<option value="removed">Removed</option>
		 		<option value="none">None</option>
		 	</select>
			</div>
			<div class="group">
				 		<input type="submit" id="insert" name="insert" value="Add" class="btn btn-secondary"></button>
			 </div>
		 </form>
  
	     	</div>
	     	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     	</div>
	     </div>
	</div>
</div>

<!-- Add Asset Modal End Here -->


<!-- View Asset Modal -->

<div class="modal fade" id="view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
	     <div class="modal-content" style="background-color: #a10599; padding: 2px;  color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
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
	     <div class="modal-content" style="background-color: purple; padding: 2px;  color: #4a0e50; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Assets</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button> 
		    </div>
		    <div class="modal-body">
			     <div id="content"></div>
	     	</div>
	     	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	     	</div>
	     </div>
	</div>
</div>
<!-- Edit Asset Modal Ends Here -->
						
<!-- Scripts -->
	<script src="./assets/js/jquery.js"></script>
			<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
			<script src="./assets/js/browser.min.js"></script>
			<script src="./assets/js/main.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		//When add button is clicked
		$('.add_data').click(function(){
			var add= $(this).attr('add');
			$.ajax({
				method:"POST",
				data:{add: add},
					success:function(output){	
					$('#add_modal').modal('show');
				}
			});
		});
	});
</script>		

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
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		//When edit button is clicked
		$(document).on('click', '.edit_data', function(){
			var id= $(this).attr('id');
			$.ajax({
				url:"updateSingleAsset.php",
				method:"POST",
				data:{id: id},
				dataType:"text", 				
				success:function(d){
                    //var data = JSON.parse(this.d);
                    $('#edit_modal').modal('show');
                    $('#content').html(d);
                    /*
					$('#aname').val(data.aname);
					$('#code').val(data.code);
					$('#barcode').val(data.barcode);
					$('#type').val(data.type);
					$('#pname').val(data.pname);
					$('#location').val(data.location);
					$('#purdate').val(data.purdate);
					$('#supplier').val(data.supplier);
					$('#amount').val(data.amount);
					$('#status').val(data.status);
					$('#id').val(data.id);
					$('#submit').val("Update");
					$('#edit_modal').modal('show');
					*/
				},
				 error: function(){
                   alert('error');
              }
			});

		});
	});
</script>		
<?php include'./incs/footer.php'; ?>