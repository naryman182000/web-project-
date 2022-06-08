<?php
include("connection.php");
$query_close=mysqli_query($con,"DELETE from close   where id='".$_GET['id']."' ");
if($query_close){
    $q=mysqli_query($con,"SELECT * from close where id='".$_GET['id']."'");  
}
?>
<script type="text/javascript">
    window.location="Select_your_order.php";
</script>    