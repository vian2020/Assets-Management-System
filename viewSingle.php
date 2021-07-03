<?php
  include ('./incs/assetdatabase.php');
  $response = '';
  $id = $_POST['id'];
  $sql = "SELECT * FROM assets WHERE id = '$id'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);

  $assetName = $row['aname'];
  $assetCode = $row['code'];
  $barcode = $row['barcode'];
  $assetType = $row['type'];
  $purchase = $row['purdate'];
  $person = $row['pname'];
  $supplier = $row['supplier'];
  $amount = $row['amount'];
  $location = $row['location'];
  $status = $row['status'];

  $response = '
  		<ul>
  			<li>Asset Name:  '.$assetName.'</li><br/>
  			<li>Asset Code:   '.$assetCode.'</li><br/>
  			<li>Barcode:    '.$barcode.'</li><br/>
  			<li>Asset Type:     '.$assetType.'</li><br/>
  			<li>Purchase Date:    '.$purchase.'</li><br/>
  			<li>Person:    '.$person.'</li><br/>
  			<li>Supplier:    '.$supplier.'</li><br/>
  			<li>Location:    '.$location.'</li><br/>
  			<li>Amount :    TZS '.$amount.'</li><br/>
  		    <li>Status:    '.$status.'</li><br/>
  		</ul>
  ';

  echo $response;
?>