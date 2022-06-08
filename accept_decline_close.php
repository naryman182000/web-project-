<?php
$hide='';
require ('previewdriverorder.php');
$query=mysqli_query($con,"UPDATE close set status='".$_POST['val']."'  where id='".$_POST['id']."' ");
$query=mysqli_query($con,"UPDATE close set driver_id='".$_SESSION['cars_id']."'  where id='".$_POST['id']."' ");

if($query){
$q=mysqli_query($con,"SELECT * from close where id='".$_POST['id']."'");
$data=mysqli_fetch_assoc($query);

$data = 'style="display: none;"';

}
?>