<!DOCTYPE html>
<html>
<?php
  include'./incs/header.php';

?>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Profile</title>

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

            <script type="text/javascript">
    var divs = new Array();
    divs[2] = "errusername";
    divs[3] = "errcompanyname";
    divs[4] = "errphonenumber";
    divs[5] = "errpassword";
    divs[6] = "errRepeatPassword";
    divs[7] = "erremail";
    function validate()
  {
      var inputs = new Array();
      inputs[2] = document.getElementById('username').value;
      inputs[3] = document.getElementById('companyname').value;
      inputs[4] = document.getElementById('phonenumber').value;
      inputs[5] = document.getElementById('password').value;
      inputs[6] = document.getElementById('RepeatPassword').value;
     inputs[7] = document.getElementById('email').value;

      var errors = new Array();
      errors[2] = "<span style='color:red'>*</span>";
      errors[3] = "<span style='color:red'>*</span>";
      errors[4] = "<span style='color:red'>*</span>";
      errors[5] = "<span style='color:red'>*</span>";
      errors[6] = "<span style='color:red'>*</span>";
      errors[7] = "<span style='color:red'>*</span>";
    
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
          document.getElementById(div).innerHTML = errMessage;
        else if (i==7)
        {
          var atpos=inputs[i].indexOf("@");
          var dotpos=inputs[i].lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
          document.getElementById('erremail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else if (i==6)
        {
          var first = document.getElementById('password').value;
          var second = document.getElementById('RepeatPassword').value;
          if (second != first)
          document.getElementById('errRepeatPassword').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
          else
          document.getElementById(div).innerHTML = " ";
        }
        else
          document.getElementById(div).innerHTML = " ";
       }
     }
        function finalValidate()
        {
          var count = 2;
          for(i=2;i<8;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == " ")
            count = count + 1;
          }
          if(count == 8)
            document.getElementById("errFinal").innerHTML = " ";
        }
   </script>


</head>
<body>


		<!-- Header -->
	<header id="header">
			<a class="logo" href="#Home.html">Asset Management System</a>
		<nav >
			<a href="Home.html">Log Out</a>

		</nav>
	</header>


<!--top nav-->

	      <nav id= "menu">
			
	      </nav>
	<div class="topnav"> 			
	  <a  href="Home.html">Home</a>
	  <a href="tryoutsAM.html">Dashboard</a>
	  <a href="Assets_page.php" > Assets</a>
	  <a href="profile.php" class="active">Profile</a>
	 
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
				<h2>User Profile</h2> 
			</header>
		</div>
	</section>

	<div class="inner" >
	    <a href="tryoutsAM.html"  class="border2" > Back </a>
	</div>

	<div class="inner" style="text-align: right;" >
		
		<a href="Admin_Sign_Up.php" class="border1" > Add User</a>
	</div>


<br></br>

<!-- user details starts with php -->
<center>
	<div style="background-color: #c62828; padding: 10px; width:1250px; color: white; font-weight:bold; font-size: 13pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px;">

					<?php
					//Getting users info
					$select = "SELECT * FROM users";
			  $getting_all = mysqli_query($conn,$select);

					 ?>

       <table style="width: 95%;">

			<tr style="color:black; font-weight: bold; ">
				<th>Username</th>
				<th> Company name</th>
				<th>Phone Number</th>
				<th> Email</th>
				<th width="400px"> Actions</th>
			</tr>

				<?php
		        //Checking if db table is empty
		       if(mysqli_num_rows($getting_all) == 0){

		         echo  '<td>No User added!!</td>';

		       }else{

		      while( $rows = mysqli_fetch_assoc($getting_all)){
		     ?>

		     <tr>
		            <td><?php echo $rows['username']; ?> </td>
		            <td><?php echo $rows['companyname']; ?></td>
		            <td><?php echo $rows['phonenumber']; ?> </td>
		            <td><?php echo $rows['email']; ?></td>
		            <td>
 
		            	<!-- button for updating user -->
		            	<button type="button" class="btn btn-primary edit_data" id="<?php echo $rows['id'] ?>"
		            data-toggle="modal" style="background: navy;" data-target="#edit_modal" > Update </button>

						        <!-- Delete Asset-->
						<a type="button" style="background: darkred;height: 50px;" class="btn btn-primary" 
						            href="delete_user.php?id=<?php echo $rows['id'] ?>" onClick="return(confirm('Are you sure you want to delete the user?'))" >Delete</a>
		           </td>

		    </tr>

				       <?php
				   }
				}
				       ?>

       </table>
	</div>
</center>

<br></br>

<!-- Edit User Modal Starts Here -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	  <div class="modal-dialog" role="document">
		    <div class="modal-content"style="background-color: #808000; padding: 20px; width:650px; color: white; font-weight:bold; font-size: 20pt; box-shadow: -6px -10px 6px dimgrey; border: 2px solid black; border-radius: 15px; font-size: 13pt;" >
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Update User Information</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
			      </div>

			      <div class="modal-body"> 
			      	<div id= "content"></div>
			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		    </div>
	  </div>
</div>
</div>
        <!-- JsQuery for updating -->
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		//When edit button clicked
		$(document).on('click', '.edit_data', function() {
			var id = $(this).attr('id');
			 $.ajax({
			 	url: "profile_p.php",
				method: "post",
				data: { id: id },
				dataType: "text",
				success: function(data) {
					// $('#username').val(data.username);
					// $('#companyname').val(data.companyname);
					// $('#phonenumber').val(data.phonenumber);
					// $('#password').val(data.password);
					// $('#email').val(data.email);
					// $('#submit').val("Update");
			 		$('#edit_modal').modal('show');
			 		$('#content').html(data);
				},
				error: function(){
					alert('error');
				}
			 });
	
		});
	});
</script></body>		
<?php include'./incs/footer.php'; ?>
<!-- </body>
</html> -->