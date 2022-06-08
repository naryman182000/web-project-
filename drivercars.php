<style>

table, th, td {
  border: 0.2px solid;
  margin-top: 90px;
  margin-left:10px;
 

}

#customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
          
            
        }

        #customers td, #customers th {
            border: 0.2px solid #ddd;
            padding: 3px;
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
<?php 
include_once('connection.php'); 
$query="select * from cars"; 

$result = mysqli_query($con, $query);
?> 
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
                <a class="nav-link " href="updateprofile.php">Profile</a>
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
                        <a class="nav-link pr-0" href="updateprofile.php">Profile</a>
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
    <th>FullName</th>
    <th>Email</th>
    <th>PhoneNumber</th>    
    <th>BirthDate</th>
    <th>National ID</th>
    <th>Gender</th>
    <th> Car License Number</th>
    <th>Car License Date</th>
    <th>Password</th>
    <th>Car Model</th>
    <th>License Number</th>
    <th>License Date</th>
    <th>Car ID</th>
    <th>License City</th>
    <th>high premission</th>
    <th>Status</th>
    <th>Change</th>
    <th>Type</th>
    <th>Change Type</th>

  </tr>
  <tr>
  <?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['FullName']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
        <td><?php echo $rows['phone_Number']; ?></td> 
        <td><?php echo $rows['birth_date']; ?></td> 
        <td><?php echo $rows['National_ID']; ?></td> 
        <td><?php echo $rows['gender']; ?></td> 
        <td><?php echo $rows['car_licence_Number']; ?></td> 
        <td><?php echo $rows['car_licence_date']; ?></td> 
        <td><?php echo $rows['password']; ?></td> 
        <td><?php echo $rows['car_model']; ?></td> 
        <td><?php echo $rows['licence_Number']; ?></td> 
        <td><?php echo $rows['car_licence_date']; ?></td> 
        <td><?php echo $rows['car_ID']; ?></td> 
        <td><?php echo $rows['licence_city']; ?></td> 
        <td><?php echo $rows['high_permession']; ?></td> 
		
      
        <td><?php 
        if( $rows['active']==1){echo"<p id=str ".$rows['cars_id'].">Active</p>";}
        else{echo"<pp id=str ".$rows['cars_id'].">DisActive</p>";}
        ?></td> 
		
	
    <td>
    <select onchange="active_deactive_cars(this.value,<?php echo $rows['cars_id'];?>)">
    <option > </option>
    <option value="1">Active</option>
    <option value="0">DeActive</option>
    <?php 
           
          ?> 
        
    </td>
    <td>
    <?php 
        if( $rows['type']==1){echo"<p id=str ".$rows['cars_id'].">Admin</p>";}
        else{echo"<pp id=strr ".$rows['cars_id'].">User</p>";}
        ?></td> 
    <td>
    <select onchange="admin_cars(this.value,<?php echo $rows['cars_id'];?>)">
    <option > </option>
    <option value="1">Admin</option>
    <option value="0">User</option>
    <?php 
        }  
          ?> 


    </td>
  </tr>

 
</table> 
</div>      
<div id="userbtn">
   <a  href="drivercarform.php"  class="adduser-btn"> Add Driver With Car </a>
  </div> 

 
<script type="text/javascript" src="js/admin.js"> </script> 
<script type="text/javascript" src="js/active.js"> </script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
</body>

</html>