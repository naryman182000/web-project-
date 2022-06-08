<?php
session_start();
include("connection.php");?>
<style>

table, th, td {
  border: 1px solid;
  width:50% ;
  position:relative;
  margin-top: 10px;
  margin-left:270px;
 

}

#customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #a9a9a9;
            color: white;
        }

</style>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Transportz</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
              <span>
               NRNTYF
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="Select_your_order.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html"> Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html"> Shop </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="company.html"> Company </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="contact.html">Contact us</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="profile.php">Profile</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
             NRNTYF
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+71) 258964785
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    NRNTYF@gmail.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="Select_your_order.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html"> Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shop.html"> Shop </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="company.html"> Company </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="contact.html">Contact us</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="profile.php">Profile</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="logout.php">Log Out</a>
                      </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->
  <div id="customers" aria-required="true">

  <table>
  <tr>

  <th>location</th>
    <th>distination</th>
    <th>Email</th>
    <th>hight</th>
    <th>date</th>
    <th>typeofgoods</th>
    
    <th>id</th>
    <th>typeofCar</th>
    <th>Status</th>
    <th>Change Status</th>
    
    
    
    
  </tr>
  <tr>
    
  <?php
  include_once('connection.php'); 
  if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
 
 
  $query="SELECT * from opentrucks LEFT JOIN customers on  customers.email=opentrucks.email   WHERE user_id='$id'"; 
  //$res = mysqli_query($con, $query);
  //$out = mysqli_fetch_array($res);
  //$email=$out['email'];
  $result = $con->query($query);
  if($query){
  

    //$q="SELECT * from opentrucks WHERE email='$email'";
    
  

  while($row = $result->fetch_assoc()) 
		{ 
		?> 
    
		<tr> <td><?php echo $row['location']; ?></td> 
		<td><?php echo $row['distination']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['hight']; ?></td> 
        <td><?php echo $row['data']; ?></td> 
        <td><?php echo $row['typeofgoods']; ?></td> 
        <td><?php echo $row['id']; ?></td>
        <td>Opentruck</td>
        <td><?php 
        if( $row['status']==1){echo"<p id=str ".$row['email'].">Activated</p>";}
        else{echo"<pp id=str ".$row['email'].">Not Active Yet</p>";}
        ?></td> 
        
      
    <td>
     
    <?php
      if($row['status']=="0"){?>
      
      <a href="deleteorderop.php?id=<?php echo $row['id'];?>" > Delete</a>
  
    
    <?php}
    ?>

    
    <?php 
    }
          ?> 
      
    </td>  
    
    
   
    <?php 
        }}}    
          ?> 


   
  </tr>

 


 
  <tr>
    
  <?php
  include_once('connection.php'); 
  if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
 
 
  $query="SELECT * from close LEFT JOIN customers on  customers.email=close.email   WHERE user_id='$id'"; 
  //$res = mysqli_query($con, $query);
  //$out = mysqli_fetch_array($res);
  //$email=$out['email'];
  $result = $con->query($query);
 
  
 
 
  if($query){
  

   
  

  while($row = $result->fetch_assoc()) 
		{ 
		?> 
    
		<tr> <td><?php echo $row['location']; ?></td> 
		<td><?php echo $row['distination']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['hight']; ?></td> 
        <td><?php echo $row['data']; ?></td> 
        <td><?php echo $row['typeofgoods']; ?></td> 
        <td><?php echo $row['id']; ?></td>
        <td>Closetruck</td>
        
        <td><?php 
        if( $row['status']==1){echo"<p id=str ".$row['email'].">Activated</p>";}
        else{echo"<pp id=str ".$row['email'].">Not Active Yet</p>";}
        ?></td> 
		
    <td>
    <?php
      if($row['status']=="0"){?>
      
      <a href="deleteorderclose.php?id=<?php echo $row['id'];?>" > Delete</a>
  
    
    <?php}
    ?>

    
    <?php 
    }
          ?> 
      
    </td>  
    
    
   
    <?php 
        }}}    
          ?> 


   
  </tr>

 

    
    
    
    
  </tr>
  <tr>
    
  <?php
  include_once('connection.php'); 
  if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
 
 
    $query="SELECT * from foodtrucks LEFT JOIN customers on  customers.email=foodtrucks.email   WHERE user_id='$id'"; 
    //$res = mysqli_query($con, $query);
    //$out = mysqli_fetch_array($res);
    //$email=$out['email'];
    $result = $con->query($query);
 
 
  if($query){

  while($row = $result->fetch_assoc()) 
		{ 
		?> 
    
		<tr> <td><?php echo $row['location']; ?></td> 
		<td><?php echo $row['distination']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['hight']; ?></td> 
        <td><?php echo $row['data']; ?></td> 
        <td><?php echo $row['typeofgoods']; ?></td> 
        <td><?php echo $row['id']; ?></td>
        <td>Food Truck</td>
        <td><?php 
        if( $row['status']==1){echo"<p id=str ".$row['email'].">Activated</p>";}
        else{echo"<pp id=str ".$row['email'].">Not Active Yet</p>";}
        ?></td> 
		
    <td>
    <?php
      if($row['status']=="0"){?>
      
      <a href="deleteorderfood.php?id=<?php echo $row['id'];?>" > Delete</a>
  
    
    <?php}
    ?>

    
    <?php 
    }
          ?> 
      
    </td>  
    
    
   
    <?php 
        }}}    
          ?> 


   
  </tr>

 

  <tr>
    
  <?php
  include_once('connection.php'); 
  if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
 
 
    $query="SELECT * from sea LEFT JOIN customers on  customers.email=sea.email   WHERE user_id='$id'"; 
    //$res = mysqli_query($con, $query);
    //$out = mysqli_fetch_array($res);
    //$email=$out['email'];
    $result = $con->query($query);
  

 
 
  if($query){
  

   
  

  while($row = $result->fetch_assoc()) 
		{ 
		?> 
    
		<tr> <td><?php echo $row['location']; ?></td> 
		<td><?php echo $row['distination']; ?></td> 
		<td><?php echo $row['email']; ?></td> 
		<td><?php echo $row['hight']; ?></td> 
        <td><?php echo $row['data']; ?></td> 
        <td><?php echo $row['typeofgoods']; ?></td> 
        <td><?php echo $row['id']; ?></td>
        <td>Sea </td>
        
        <td><?php 
        if( $row['status']==1){echo"<p id=str ".$row['email'].">Activated</p>";}
        else{echo"<pp id=str ".$row['email'].">Not Active Yet</p>";}
        ?></td> 
		
    <td>
    <?php
      if($row['status']=="0"){?>
      
      <a class="read-btn" href="deleteordersea.php?id=<?php echo $row['id'];?>" > Delete</a>
  
    
    <?php}
    ?>

    
    <?php 
    }
          ?> 
      
    </td>  
    
    
   
    <?php 
        }}}    
          ?> 


   
  </tr>

 
</table> 
</div> 

                   

     

<script type="text/javascript" src="js/admin.js"> </script> 
<script type="text/javascript" src="js/active.js"> </script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
</body>

</html>
