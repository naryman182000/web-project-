<?php
include("connection.php");

$query_Sea=mysqli_query($con,"DELETE from sea   where id='".$_GET['id']."' ");
if($query_sea){
    $q=mysqli_query($con,"SELECT * from sea where id='".$_GET['id']."'");  
}
?>
<script type="text/javascript">
    window.location="Select_your_order.php";
</script>    
