<!DOCTYPE html>
<?php
  include'./incs/assetdatabase.php';
?>

<html>
<head>
  <title>modal</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="AssetsM.css">
 
  <style>
table, th, tr, td {
    border: 2px solid black;
        border-collapse: collapse;
}
th, td {
    padding: 5px 8px;
    column-width: 200px;
}
</style>
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

<section class="wrapper" style="background-image: url('infoguard_assetsmng.jpg'); background-repeat: no-repeat; background-size: 100%; height: 300px;">
      
      </section>    
      <section class="wrapper" style="height: 5px" >
        <div class="inner">
          <header class="special">
            <h2> View Asset</h2> 
          </header>
          </div>
        </section>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<center><!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="background-color: #c62828; padding: 10px; width:650px; color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
        <?php
                 }

        ?>
      </footer>

<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>

</body>
</html>

