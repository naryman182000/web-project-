<?php
include("connection.php");
$query_optrucks=mysqli_query($con,"DELETE from opentrucks   where id='".$_GET['id']."' ");


if($query_optrucks){
$q=mysqli_query($con,"SELECT * from opentrucks where id='".$_GET['id']."'");

}


?>
<script type="text/javascript">
    window.location="Select_your_order.php";
</script>    