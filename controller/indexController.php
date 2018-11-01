<?php
include('C:/xampp/htdocs/Michael Fasanya/Class/Main.php');

$search=$_POST['search'];
$obj=new main();
$obj->get_records($search);
$Outputs=$obj->RESULTS;

if ($Outputs && $Outputs->num_rows==0){
$status='NOT AVAILABLE';}
else{$status='';}
?>
