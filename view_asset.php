<!DOCTYPE html>
<?php
  include'./incs/assetdatabase.php';
?>


<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Assets Page</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

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

	<body class="">

		<!-- Header -->
	<!--		<header id="header">
				<a class="logo" href="#Home.html">Asset Management System</a>
			 <nav >
				<a href="Home.html">Log Out</a>

				</nav>
			</header>
 <nav id= "menu">
		
				</nav> -->
<!--top nav--> <!--
<div class="topnav"> 			
  <a  href="Home.html">Home</a>
  <a href="tryoutsAM.html">Dashboard</a>
  <a href="Assets_page.php" class="active"> Assets</a>
  <a href="profile.php">Profile</a>
 
</div>

<section class="wrapper" style="background-image: url('infoguard_assetsmng.jpg'); background-repeat: no-repeat; background-size: 100%; height: 300px;">
			
			</section>		
			<section class="wrapper" style="height: 5px" >
				<div class="inner">
					<header class="special">
						<h2> View Asset</h2> 
					</header>
					</div>
				</section>

	<div class="inner">
	<a href="Assets_page.php"  class="border2" > Back</a>
</div>

<br></br> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> View </button>
<center><!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #570029; padding: 2px; height:650px; width:600px; color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Asset</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
      </div>
      <div class="modal-body">
<div class="" >
	
	
		<?php
        //Checking if db table is empty
       if(mysqli_num_rows($get_asset) == 0){

         echo  '<p>No asset added!!<p>';

       }else{

      while( $rows = mysqli_fetch_assoc($get_asset)){
     ?>
		
			<p> Asset Name: 
				<?php echo $rows['aname']; ?>
			 </p>
			<p> Asset Code:  <?php echo $rows['code']; ?></p>
			<p>Barcode:  <?php echo $rows['barcode']; ?></p>
			<p> Type: <?php echo $rows['type']; ?></p>
			<p> Person Name: <?php echo $rows['pname']; ?></p>
			<p>Location: <?php echo $rows['location']; ?></p>
			<p> Purchase Date: <?php echo $rows['purdate']; ?></p>
			<p> Supplier: <?php echo $rows['supplier']; ?></p>
			<p>Amount:TZS <?php echo $rows['amount']; ?></p>
			<p> Status: <?php echo $rows['status']; ?></p>
			 </div>
    <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

  
       <?php
   }
}
       ?>



</center>
</div>
<br></br>
<!-- Footer --> <!--
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
							<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; This work Belongs to Vuma Africa, Thank You.
					</div>
				</div>
				<?php
                 }

				?>
			</footer> -->

		<!-- Scripts -->
		<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>


</html>
