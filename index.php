<?php include('C:/xampp/htdocs/Michael Fasanya/controller/indexController.php'); ?>

<html lang="en">
<head>
  <title>Michael Fasanya Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br/><br/><br/><br/><br/>
<div class="container">
 <!---  please not no CRF PROTECTION on for due ti limited time -->
   <form action="index.php" method="POST"> 
   <input list="tx" name="search" placeholder="location or property name"/>
   <datalist id="tx">
  <option value="Sea View">
  <option value="wales">
  <option value="Scotland">
  <option value="Yorkshire">
  <option value="Cosey">
  <option value="Lake District">
  <option value="Cornwall">
  
  </datalist>
   <button type="submit" class="btn btn-info">Search</button>
   </form>
  
 <?php echo'<h1>PROPERTY'.' '.$status.'</h1>';?>
 <?php if ($Outputs && $Outputs->num_rows>0){
   echo "<table class='table'>
        <thead>
        <tr>	
        <th>Location</th>	  
        <th>Property Nname</th>
        <th>Near Beach</th>
        <th>Accepts Pets</th>	
        <th>Sleeps</th>
		<th>Beds</th>		
      </tr>
    </thead>
    <tbody>
      <tr class='success'>"	;
 }
?> 
<?php

if (($Outputs))
if ($Outputs->num_rows==5){
$row=1;}else if ($Outputs->num_rows==10){
$row=2;}else{$row=1;};
//please pardon me i have very limited time to do this and its a rushed work//
$i = 0;
foreach ($Outputs AS $key => $value):    
    // idealy there will be a condition here to limit row base on info from database automatic
    if ($i == $row) { break; }	
      echo "<tr class='success'>";
	  echo"<td>".$value['location']."</td>";
	  echo"<td>".$value['property_name']."</td>";
	  echo"<td>".$value['near_beach']."</td>";
	  echo"<td>".$value['accepts_pets']."</td>";
	  echo"<td>".$value['sleeps']."</td>";
	  echo"<td>".$value['beds']."</td>";
	  echo "<tr class='success'>";

$i++;
endforeach


?>              
    </tbody>
  </table>
  
 <BR/><BR/>
 <?php if ($Outputs && $Outputs->num_rows>0){
  echo "<h1>BOOKINGS</h1>
  <table class='table'>
    <thead>
      <tr>	  
               
        <th>Booking Start Date</th>
		<th>Booking End Date</th>
		<th>Discount Start Date</th>
		<th>Discount End Date</th>
		<th>percentage</th>
		<th>Employee First name</th>
		<th>Employee Last Name</th>
		<th>Employee Age</th>
		<th>Department Name</th>
      </tr>
    </thead>
    <tbody>
      <tr class='success'>";
 }
?> 
<?php
if (($Outputs))   
$i = 0;
foreach ($Outputs AS $value):
    // idealy there will be a condition here to limit row base on info from database automatic
    if ($i == 1) { break; }
	  echo "<tr class='success'>";	  
	  echo"<td>".$value['booking_starts']."</td>";
	  echo"<td>".$value['booking_ends']."</td>";
	  echo"<td>".$value['discounts_starts']."</td>";
	  echo"<td>".$value['discounts_ends']."</td>";
	  echo"<td>".$value['discounts_percentage']."</td>";
	  echo"<td>".$value['emp_firstName']."</td>";
	  echo"<td>".$value['emp_LastName']."</td>";
	  echo"<td>".$value['emp_age']."</td>";
	  echo"<td>".$value['department_name']."</td>";
	  echo "<tr class='success'>";
	  

$i++;
endforeach
?>

        
              
    </tbody>
  </table>
  <?php if ($Outputs && $Outputs->num_rows>0){
  echo "<BR/><BR/><BR/>
  <h1>BAND PRICE</h1>
   <table class='table'>
    <thead>
      <tr>	  
        <th>Start Date</th>
        <th>End Date</th>
        <th>Price</th>		
      </tr>
    </thead>
    <tbody>
      <tr class='success'>";
  }
?>  
<?php
if (($Outputs))   
$i = 0;
foreach ($Outputs AS $value):
    // idealy there will be a condition here to limit row base on info from database automatic
    if ($i == 5) { break; }
	  echo "<tr class='success'>";
	  echo"<td>".$value['price_starts']."</td>";
	  echo"<td>".$value['price_ends']."</td>";
	  echo"<td>".$value['price_band_price']."</td>";
	  echo "<tr class='success'>";
$i++;
endforeach
?>
             
    </tbody>
  </table>


</div>

</body>
</html>
















