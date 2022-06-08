<?php
include("connection.php");
$query_food=mysqli_query($con,"DELETE from foodtrucks   where id='".$_GET['id']."' ");

if($query_food){
    $q=mysqli_query($con,"SELECT * from foodtrucks where id='".$_GET['id']."'");  
}
?>
<script type="text/javascript">
    window.location="Select_your_order.php";
</script> 