<?php
$hide='';
require ('previewdriverorder.php');
$query=mysqli_query($con,"UPDATE sea set status='".$_POST['val']."'  where id='".$_POST['id']."' ");
$query=mysqli_query($con,"UPDATE sea set status='".$_SESSION['cars_id']."'  where id='".$_POST['id']."' ");

if($query){
$q=mysqli_query($con,"SELECT * from sea where id='".$_POST['id']."'");
$data=mysqli_fetch_assoc($query);

$data = 'style="display: none;"';

}
?>