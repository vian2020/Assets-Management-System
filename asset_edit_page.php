
<!DOCTYPE html>
<html>
<head>
	<title>Edit Asset</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="AssetsM.css">
</head>

<?php
  include'./incs/assetdatabase.php';

  if($_GET['id'] && is_numeric($_GET['id'])){

    //Getting asset item details from db table
    $ass_id = $_GET['id'];

    $select = "SELECT * FROM assets WHERE id='$ass_id'";
    $get_asset = mysqli_query($conn,$select);

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
						<h2>Edit Asset</h2> 
					</header>
				</div>
			</section>

<div class="inner" >
	<a href="Assets_page.php"  class="border2" > Back </a>
</div>

<br></br>

      <!-- PHP and Editing Form Starts Here-->
      <center >


	<div class="inner"> 
<?php
  //Displaying asset item details in a form for updating

  while($arow = mysqli_fetch_assoc($get_asset)){
?>

	<form action="update_asset.php" method="post" style="background-color: #4a0e50; padding: 20px; width:650px; color: white; font-weight: bold; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; font-size: 13pt; border-radius: 15px;">
 <table>
        <input type="hidden" name="asset_id" value="<?php echo $ass_id; ?>"/>
		 <div class="group" style="padding: 6px 6px;"><br />
		 	<label class="label" for="Asset Name"> Asset Name:</label> 
		 	<input type="text" value="<?php echo $arow['aname']; ?>" name="aname" value="" >
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="code"> Asset Code:</label>
		 	<input type="text" value="<?php echo $arow['code']; ?>" name="code" value="">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="barcode"> Barcode:</label> 
		 	<input type="text" value="<?php echo $arow['barcode']; ?>" name="barcode">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Asset Type"> Asset Type:</label> 
		 	<input type="text" value="<?php echo $arow['type']; ?>" name="type">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="Person Name"> Person Name:</label>
		 	<input type="text" value="<?php echo $arow['pname']; ?>" name="pname">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="location"> Location:</label>
		 	<input type="text" value="<?php echo $arow['location']; ?>" name="location" value="">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="purdate"> Purchase Date:</label>
		 	<input type="date" name="purdate" value="<?php echo $arow['purdate']; ?>"><!-- <span style="color:green;"><?php echo $arow['purdate']; ?></span> -->
		 	</div>

		 	 <div class="group"> <br />
		 	<label class="label" for="supplier"> Supplier:</label>
		 	<input type="text" name="supplier" value="<?php echo $arow['supplier']; ?>">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="amount"> Amount: TZS</label>
		 	<input type="text" name="amount" value="<?php echo $arow['amount']; ?>">
		 	</div>

		 	 <div class="group"><br />
		 	<label class="label" for="status"> Status:</label>
		 	<select name="status">
		 		<option selected="" value="<?php echo $arow['status']; ?>">New</option>
		 		<option value="new">New</option>
		 		<option value="depreciating">Depreciating</option>
		 		<option value="removed">Removed</option>
		 		<option value="none">None</option>
		 	</select>
		
		 	</div>

		 	 <div class="group"><br />
		 	 			 	
		 	<input type="submit" name="submit" class="button" value="Update"/>
		 	</div>
		 </table>
	</form>
	<?php
}
	?>
</div>
</center>
<br></br>

	<!--
<script type="text/javascript">
     window.prompt(" ");</script> -->

<!-- Footer -->
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
								<!--<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li> -->
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
}
?>
</body>
</html>

