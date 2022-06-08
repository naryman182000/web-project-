<style>
 .errormsg{
  margin:10px 0;
  display: block;
  background-color: crimson;
  color:black;
  border-radius: 5px;
  font-size: 20px;

}
</style>
<?php
// Initialize the session
session_start();
include("connection.php");

if(isset($_POST['submit'])){

   
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['email'];
   
    $select_custo = " SELECT * FROM customers WHERE email = '$email' && password = '$password' ";
    
    $select_driv_car= " SELECT * FROM cars WHERE email = '$email' && password = '$password' ";

 
    $result_custo = mysqli_query($con, $select_custo);
   
    $result_driv_car = mysqli_query($con, $select_driv_car);



    
    if(mysqli_num_rows($result_custo)> 0 ||mysqli_num_rows($result_driv_car)  > 0){
 
       $row_custom = mysqli_fetch_array($result_custo);
   
       $row_driv_car = mysqli_fetch_array($result_driv_car);

       if(  $row_custom['active']=='1'|| $row_driv_car['active']=='1'){
 
         if($row_custom['type']=='1'){
            $_SESSION['user_id']=$row_custom['user_id'];
            header('location:previewAdmin.php');
        }
        elseif($row_custom['email'] == $email ){
            $_SESSION['user_id']=$row_custom['user_id'];
           
            header('location:Select_your_order.php');
           }

      
        elseif($row_driv_car['email'] == $email ){
            if($row_driv['type']=='1'||$row_driv_car['type']=='1'){
                $_SESSION['cars_id']=$row_driv_car['cars_id'];
                 header('location:Show_order_driver.php');
            }else{
                $_SESSION['cars_id']=$row_driv_car['cars_id'];
                header('location:Show_order_driver.php');

            }
            
           }
         else{
            echo "<p class='errormsg'> incorrect email or password!</p>"; 
          } 
       }

  
       
    else{
        echo"<p class='errormsg'> you don't have premission from the admin yet</p>";
    }
   
      
    }
 };
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="LandingPageForVisitors.php">Home <span class="sr-only">(current)</span></a>
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
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                                        <ul class="navbar-nav  ">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="Select_your_order.php">Home <span
                                                        class="sr-only">(current)</span></a>
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

        <!-- slider section -->
        <section class=" slider_section ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600'
                    rel='stylesheet' type='text/css'>
                <link href="reg.css" rel="stylesheet">

                <div >
                    <h2 class="cz">Log_in:-</h2>
                
                   <form action="" method="Post" class="siu" >
                    <label for="fname">Email:</label><br>
                    <input type="email" id="fname"  placeholder="a@gmail.com" name="email" required ><br>
                    <label for="lname">Password:</label><br>
                    <input type="password" placeholder="Password" id="lname" name="password" required ><br>
                   <center> <button  type="submit" name="submit" class="button" >Log in</button></center>
                   <a href="reset_pass.php">reset_password</a>
                  </form> 
                    
                </div>


        </section>

        <!-- end slider section -->
    </div>




    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</html>