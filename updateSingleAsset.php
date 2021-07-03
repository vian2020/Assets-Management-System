<?php
session_start();

header('Content-Type: application/json'); 

  include ('./incs/assetdatabase.php');
if (isset($_POST["id"])) 
{
 $id = $_POST['id']; 
  $dt = '';
  $sql = "SELECT * FROM assets WHERE id = '".$_POST["id"]."'";
  $query = mysqli_query($conn, $sql);

  while($rows = mysqli_fetch_assoc($query)){


    $dt .= '<form action="update_asset.php" id="edit_form" method="post" >
        <input type="hidden" name="id" id="id" value='.$rows['id'].' />

     <div class="group" style="padding: 6px 6px;"><br />
      <label class="label" for="Asset Name"> Asset Name:</label> 
      <input type="text" name="aname" value='.$rows['aname'].' id="aname" >
      </div>

       <div class="group"><br />
      <label class="label" for="code"> Asset Code:</label>
      <input type="text" id="code" name="code" value='.$rows['code'].' value="" >
      </div>';
    
      $dt .='<div class="group"><br />
      <label class="label" for="barcode"> Barcode:</label> 
      <input type="text" id="barcode" name="barcode" value='.$rows['barcode'].'>
      </div>

       <div class="group"><br />
      <label class="label" for="Asset Type"> Asset Type:</label> 
      <input type="text" id="type" name="type" value='.$rows['code'].'>
      </div>

       <div class="group"><br />
      <label class="label" for="Person Name"> Person Name:</label>
      <input type="text" id="pname" name="pname" value='.$rows['pname'].'>
      </div>';

      $dt .='<div class="group"><br />
      <label class="label" for="location"> Location:</label>
      <input type="text" id="location" name="location" value='.$rows['location'].'>
      </div>

       <div class="group"><br />
      <label class="label" for="purdate"> Purchase Date:</label>
      <input type="date" name="purdate" id="purdate" value='.$rows['purdate'].'><!-- <span style="color:green;"></span> -->
      </div>

       <div class="group"> <br />
      <label class="label" for="supplier"> Supplier:</label>
      <input type="text" name="supplier" id="supplier" value='.$rows['supplier'].'>
      </div>';

      $dt .=' <div class="group"><br />
      <label class="label" for="amount"> Amount: TZS</label>
      <input type="text" name="amount" id="amount" value='.$rows['amount'].'>
      </div>

       <div class="group"><br />
      <label class="label" for="status"> Status:</label>
      <select name="status" id="status">
        <option selected="" >'.$rows['status'].'</option>
        <option value="New">New</option>
        <option value="Depreciating">Depreciating</option>
        <option value="Removed">Removed</option>
        <option value="None">None</option>
      </select>
      </div>
      <div class="group">
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
       </div>
     </form>';

  }
// value=
 
  //$dt = json_encode($rows, JSON_PRETTY_PRINT);

  echo $dt;
}

?>
