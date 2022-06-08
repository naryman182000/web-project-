<?php 
session_start();
include("connection.php");
include("functions.php");

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
                Transportz
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
                <a class="nav-link " href="logout.php">Log out</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
              Transportz
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

  <!--start profile section-->
 <center>
     <H1 class="prohead">My Profile</H1>
     <H1 class="prohead">This Your Information  </H1>

     <form action="finalupdate.php" enctype="multipart/form-data" method="post">
       <?php

        if(isset($_SESSION['user_id'])){
          $id=$_SESSION['user_id'];
      
       
       
       $sql="SELECT * from customers WHERE user_id= '$id' ";
       $res=mysqli_query($con,$sql);
       if($res){
         if(mysqli_num_rows($res)>0){
           while($row=mysqli_fetch_array($res)){
           //  print_r($row);
    
       ?>
    <div class="box">
        <img class="picture"  src="images/pic.png"></image>
        <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
        
        
        <input class="pro" type="text" name="firstName" placeholder="First Name" value="<?php echo $row['firstName']?>">
        <input class="pro" type="text" name="lastName" placeholder="Last Name" value="<?php echo $row['lastName']?>">
        <input class="pro" type="email" name="email"  placeholder="Email"value="<?php echo $row['email']?>">
        <input class="pro" type="password" name="password"  placeholder="password"value="<?php echo $row['password']?>">
        <input class="pro" type="text"  name="phone_Number" placeholder="Phone Number"value="<?php echo $row['phone_Number']?>">
        <input class="pro" type="hidden"  name="id" placeholder="Phone Number"value="<?php echo $row['user_id']?>">

        
        <button name="submit"   class="save">Update</button>
    </div>
    <?php
  
          }
          }
  }
  }
  
  elseif(isset($_SESSION['cars_id'])){
    
    $id=$_SESSION['cars_id'];

 
 
 $sql="SELECT * from cars WHERE cars_id= '$id' ";
 $res=mysqli_query($con,$sql);
 if($res){
   if(mysqli_num_rows($res)>0){
     while($row=mysqli_fetch_array($res)){
     //  print_r($row);

 ?>
<div class="box">
  <img class="picture"  src="<?php echo $row['photo']?>"></image>
  <?php if (!empty($msg)): ?>
      <div class="alert <?php echo $msg_class ?>" role="alert">
        <?php echo $msg; ?>
      </div>
    <?php endif; ?>
  
  <input class="pro" type="text" name="photo" placeholder="photo" value="<?php echo $row['photo']?>">
  <input class="pro" type="text" name="FullName" placeholder="FullName" value="<?php echo $row['FullName']?>">
  <input class="pro" type="text" name="email" placeholder="x@gmail.com" value="<?php echo $row['email']?>">
  <input class="pro" type="number" name="phone_Number"  placeholder="01---------"value="<?php echo $row['phone_Number']?>">
  <input class="pro" type="date" name="birth_date"  placeholder="--/--/--"value="<?php echo $row['birth_date']?>">
  <input class="pro" type="password"  name="password" placeholder="password"value="<?php echo $row['password']?>">
  <input class="pro" type="hidden"  name="id" placeholder="Phone Number"value="<?php echo $row['cars_id']?>">

  
  <button name="submit"   class="save">Update</button>
</div>
<?php

    }
    }
}
};

    
    ?>
  </form>
  
</center>

  </div>
  <!-- info section -->
  <section class="info_section ">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="images/logo-white.png" alt="">
            <span>
              Transportz
            </span>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedconsectetur
          </p>
          <div class="info_social">
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
        <div class="col-md-3 info_address">
          <h5>
            Address
          </h5>
          <p>
            Healing Center, 176 W Street name,
            New York, NY 10014, US
          </p>
          <p>
            (+71) 8522369417
          </p>
          <p>
            (+71) 8522369417
          </p>
          <p>
            <a href="">
              transportz@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-3 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                  Links
                </h5>
                <li>
                  <a href="Select_your_order.php"> Home</a>
                </li>
                <li>
                  <a href="about.html">About</a>
                </li>
                <li>
                  <a href="service.html"> Service</a>
                </li>
                <li>
                  <a href="shop.html"> Shop</a>
                </li>
                <li>
                  <a href="company.html"> Company</a>
                </li>
                <li>
                  <a href="contact.html">Contact us</a>
                </li>
                <li>
                    <a href="updateprofile.php">Profile</a>
                  </li>

              </ul>
            </nav>
          </div>
        </div>

      </div>


    </div>
  </section>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


  
</body>

</html>