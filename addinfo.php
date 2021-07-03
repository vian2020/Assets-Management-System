
<!DOCTYPE html>
<html>
<head>
	<title>Add Asset</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="AssetsM.css">

</head>

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
  <a href="#about">Profile</a>
 
</div>

<section class="wrapper" style="background-image: url('infoguard_assetsmng.jpg'); background-repeat: no-repeat; background-size: 100%; height: 370px;">
			
			</section>
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Add Asset</h2>
					</header>
				</div>
			</section>



			<div class="inner" >
	<a href="Assets_page.php"  class="border2" > Back </a>
</div>

 <br />
<center>

	

	<form action="assetinfo.php" method="post" style="background-color: #1c4966; padding: 15px; width:650px; color: white; font-weight: bold; font-size: 13pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px;" >
		<!--  <script type='text/javascript'>alert('Successfully Submitted');</script> -->
<br />
		 <div class="group">
		 	<label class="label" for="Asset Name"> Asset Name</label>
		 	<input type="text" name="aname" value="">
		 	</div><br />

		<!-- 	 <div class="group">
		 	<label class="label" for="code"> Asset Code</label>
		 	<input type="text" id="id" name="code" value="">
		 	</div><br /> -->

		 	 <div class="group">
		 	<label class="label" for="barcode"> Barcode</label>
		 	<input type="text" name="barcode" value="">
		 	</div><br />

		 	 <div class="group">
		 	<label class="label" for="Asset Type"> Asset Type</label>
		 	<input type="text" name="type" value="">
		 	</div><br />

		 	 <div class="group">
		 	<label class="label" for="Person Name"> Person Name</label>
		 	<input type="text" name="pname" value="">
		 	</div><br />

		 	 <div class="group">
		 	<label class="label" for="location"> Location</label>
		 	<input type="text" name="location" value="">
		 	</div><br />

		 	 <div class="group">
		 	<label class="label" for="purdate"> Purchase Date</label>
		 	<input type="date" name="purdate" value="">
		 	</div><br />

		 	 <div class="group">
		 	<label class="label" for="supplier"> Supplier</label>
		 	<input type="text" name="supplier" value="">
		 	</div><br/>

		 	 <div class="group">
		 	<label class="label" for="amount" > Amount : TZS</label>
		 	<input type="text" name="amount"  value="">
		 	</div>
<br/>
		 	 <div class="group">
		 	<label class="label" for="status"> Status</label>
		 	<select name="status">
		 		<option>New</option>
		 		<option>Depreciating</option>
		 		<option>Removed</option>
		 		<option>None</option>
		 	</select>
		
		 	</div>
		 	<br/>

		 	 <div class="group">
		 	<input type="submit" name="submit" value="Submit"/>
  
</div>


	</form>
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

</body>
</html>

