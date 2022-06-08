<?php 
session_start();

	include("connection.php");
	include("functions.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    $full_Name = $_POST['FullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone_Number'];
    $birthdate = $_POST['birth_date'];
    $licenceNum= $_POST['licence_Number'];
    $licencedate= $_POST['licence_date'];
    $NationalId= $_POST['National_ID'];
		$password = $_POST['password'];
    $gender= $_POST['gender'];
		
	#	$password = $_POST['password'];

		if(!empty($full_Name) &&!empty($email) &&!empty($phone)&& !empty($birthdate)&& !empty($licenceNum)&& !empty($licencedate)&& !empty($NationalId) && !empty($password) &&!empty($gender) && !is_numeric($email))
		{

			//save to database
			//$driver_id = random_num(20);
			$query = "insert into drivers (FullName,email,phone_Number,birth_date,licence_Number,licence_date,National_ID,password,gender,driver_id) values ('$full_Name','$email','$phone','$birthdate' ,'$licenceNum','$licencedate','$NationalId','$password','$gender','$driver_id')";

			mysqli_query($con, $query);

			header("Location: driverform.php");
			die;
		}
        else
		{
			echo "Please enter some valid information!";
		}
	}

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
  <div id="user" aria-required="true">
    <h2 class="cz">Add Driver:-</h2>
    <form   action="driverform.php" method="post">
      <label for="fname">FUllName: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="fname" placeholder="FullName" name="FullName" required ><br>
      <label for="mail">Email: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" id="mail" placeholder="a@gmail.com" name="email" required ><br>
      <label for="phone_number" >phone_number:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="tel" id="pnum"placeholder="Phone Number"  name="phone_Number" required><br>
      <label for="bdata">birth_date: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date"  name="birth_date" required ><br>
      <label for="licence">licence number: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" placeholder="Licence Number"name="licence_Number" required ><br>
      <label for="pl">licence date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date" name="licence_date" required ><br>
      <label for="national_ID">National ID: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" placeholder="Nation ID" name="National_ID" required><br>
      <label for="gender">gender: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="pass"name="gender" placeholder="gender" required><br>
      <label for="password">password: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" id="pass"placeholder="Password"  name="password" required ><br>
      <label for="password">confirmed password: </label>
      <input  type="password" id="pass" placeholder="Confirmed Password" name ="confirmed_paasword"  required><br>
      <button name="submit" type="submit"  > submit  </button>
    </form> 
        


  </div>
  <div id="userbtn">
   <a  href="previewAdmin.php"  class="adduser-btn"> Go To Admin Panel </a>
  </div>  
  
  
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
</body>

</html>