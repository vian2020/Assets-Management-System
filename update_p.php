<?php 
session_start();
//include database
  include ('./incs/assetdatabase.php');
if(!empty($_POST))
{
		$data= '';

		$message= '';
		//$update='';
		//$id= $_POST['id'];
		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$companyname = mysqli_real_escape_string($conn, $_POST["companyname"]);
		$phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		if(($_POST["id"]!= ''))
		{
			$update = "UPDATE users SET username='$username', companyname='$companyname', phonenumber='$phonenumber', password='$password', email='$email' WHERE id='".$_POST["id"]."'";
// ".$_POST['id']."
			$message= '
				<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:beige; color: black;">

		  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    		<span aria-hidden="true">&times;</span>
		  			</button>

		  			<strong>User data is successfully updated! </strong>  
				</div>';

			}
		else
			{
			$update ="INSERT INTO users (username, companyname, phonenumber, password, email)
			VALUES ('$username', '$companyname', '$phonenumber', '$password', '$email' )";

			$message= '
				<div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:olive; color: white;">

					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <strong>User data is successfully inserted! </strong>

				</div>';
			}
//$edit= mysqli_query($conn,$update); 
		if(mysqli_query($conn,$update))
		{
			$data .='<p>success</p>';
			$select_update= "SELECT * FROM users ORDER BY id DESC";
			$result = mysqli_query($conn, $select_update);
			$data .= '
					<form action="" method="post" >
	        <input type="hidden" name="id" id='.$row["id"].' >

			';

				while($row = mysqli_fetch_array($result))
					{
						$data .= '
			 <div class="group" style="padding: 6px 6px;"><br />
			      <label class="label" for="User Name"> Username Name:</label> 
			      <input type="text" onkeyup="validate();" placeholder="Please fill in your Full Name" id='.$row["username"].' name="username">
			      	<div id="errusername"></div>
		     </div>

		     <div class="group"><br />
			      	<label class="label" for="companyname"> Company Name:</label>
			      	<input type="text" onkeyup="validate();" name="companyname" id='.$row["companyname"].'/>
			          <div id="errcompanyname"></div>
		     </div>

		     <div class="group"><br />
			      <label class="label" for="phonenumber"> Phone Number:</label>
			      <input type="text" onkeyup="validate();" name="phonenumber" id='.$row["phonenumber"].'  />
			        <div id="errphonenumber"></div>
		     </div>

		     <div class="group"><br />
			      <label class="label" for="password"> Password:</label> 
			      <input type="password" onkeyup="validate();" name="password" id='.$row["password"].' />
			        <div id="errpassword"></div>
		     </div>

		     <div class="group"><br/>
		          <label for="RepeatPassword" class="label">Repeat Password</label>
		          <input type="password" class="input" data-type="password" id="RepeatPassword" onkeyup="validate();"/>
		        	<div id="errRepeatPassword"></div>
		     </div>

		     <div class="group"><br />
			      <label class="label" for="email"> Email:</label> 
			      <input type="text" onkeyup="validate();"  name="email"  id='.$row["email"].'
			      />
			        <div id="erremail"></div>
		     </div>
		     <div class="group"><br/>
		     	 <button type="button" class="btn btn-primary " name="submit" id='.$row["id"].' value="Update"  style="background-color: #000d00;" onclick="validate();finalValidate();" />Update</button>
       				 <div id="errFinal"></div>
			  </div>

  </table>


							 ';
					}
			$data .= '</form>';
		 }
	}

	if($data){
	$_SESSION['msg'] = $message;

		header('location:profile.php');
	}
?>
<!--  -->