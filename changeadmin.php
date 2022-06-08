<?php
require ('users.php');
$query=mysqli_query($con,"Update customers set type='".$_POST['val']."'  where user_id='".$_POST['user_id']."'");
if($query){
$q=mysqli_query($con,"Select * from customers where user_id='".$_POST['user_id']."'");
$data=mysqli_fetch_assoc($query);
echo $data['$type'];

}
require ('driverdata.php');
$query=mysqli_query($con,"Update drivers set type='".$_POST['val']."'  where driver_id='".$_POST['driver_id']."'");
if($query){
$q=mysqli_query($con,"Select * from drivers where driver_id='".$_POST['driver_id']."'");
$data=mysqli_fetch_assoc($query);
echo $data['$type'];

}
require ('drivercars.php');
$query=mysqli_query($con,"Update cars set type='".$_POST['val']."'  where cars_id='".$_POST['cars_id']."'");
if($query){
$q=mysqli_query($con,"Select * from cars where cars_id='".$_POST['cars_id']."'");
$data=mysqli_fetch_assoc($query);
echo $data['$type'];

}
?>