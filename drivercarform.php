<?php 
session_start();

	include("connection.php");
	include("functions.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $full_Name = $_POST['FullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone_Number'];
    $birthdate = $_POST['birth_date'];
    $NationalId= $_POST['National_ID'];
    $gender= $_POST['gender'];
    $car_licence_number= $_POST['car_licence_Number'];
    $car_licence_date= $_POST['car_licence_date'];
    $password = $_POST['password'];
		$carmodel = $_POST['car_model'];
    $licenceNum= $_POST['licence_Number'];
    $licencedate= $_POST['licence_date'];
    $carid= $_POST['car_ID'];
    $licenceCity= $_POST['licence_city'];
    $highPermession= $_POST['high_permession'];



		
	#	$password = $_POST['password'];

		if(!empty($full_Name) &&!empty($email) &&!empty($phone) && !empty($birthdate)&& !empty($NationalId)&& !empty($gender)&& !empty($car_licence_number)&& !empty($car_licence_date)&& !empty($password)&& !empty($carmodel) && !empty($licenceNum) && !empty($licencedate) && !empty($carid) && !empty($licenceCity) && !empty($highPermession)  && !is_numeric($email))
		{

			//save to database
			//$cars_id = random_num(20);
			$query = "insert into cars (FullName,email,phone_Number,birth_date,National_ID,gender,car_licence_Number,car_licence_date,password,car_model,licence_Number,licence_date,car_ID,licence_city,high_permession,cars_id) values ('$full_Name','$email','$phone','$birthdate' ,'$NationalId','$gender','$car_licence_number','$car_licence_date','$password','$carmodel','$licenceNum','$licencedate','$carid','$licenceCity','$highPermession','$cars_id')";

			mysqli_query($con, $query);

			header("Location: drivercarform.php");
			die;
		}else
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
    <h2 class="cz">driver and car information:-</h2>
    <form action="drivercarform.php" method="post" >
      <br>
      <label for="fname">Full Name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="fname" placeholder="Full Name" name="FullName" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="mail">Email: </label>
      <input type="email" id="mail" placeholder="a@gmail.com" name="email" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="phone_number" >phone_number:</label>
      <input type="tel" id="pnum"placeholder="Phone Number"  name="phone_Number" required><br>
      <label for="bdata">birth date: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date" name="birth_date" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="national_ID">National ID: </label>
      <input type="number" placeholder="Nation ID"  name="National_ID"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="gender">gender: </label>
      <input type="text" id="pass" placeholder="gender" name="gender" required><br>
      <label for="licence">licence number: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" placeholder="Licence Number" name ="licence_Number"required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="pl">licence date:</label>
      <input type="date" name="licence_date"required ><br>
      <label for="password">password: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" id="pass"placeholder="Password"  name="password" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="password">confirmed password: </label>
      <input  type="password" id="pass" placeholder="Confirmed Password" name ="confirmed_paasword"  required><br><br><br><br>
      <label for="car model">Car model:</label>
      <input type="text"  placeholder="car  model"  name="car_model"required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="licence">licence number:</label>
      <input type="number" placeholder="licence number" name="car_licence_Number"required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="pl">licence date:</label>
      <input type="date" placeholder="licence data" name="car_licence_date"required ><br>
      <label for="national_ID">car ID:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  placeholder="car ID" name="car_ID"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="gender">licence city:</label>
      <input type="text" id="pass" placeholder="licence city"name="licence_city"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="gender">hight permession:</label>
      <input type="text" id="pass"placeholder="hight permession" name="high_permession"required><br>
      <button name="submit" type="submit" class="submit" >submit</button>
   
  </div>
    </form> 
    
    <div id="userbtn">
   <a  href="previewAdmin.php"  class="adduser-btn"> Go To Admin Panel </a>

  </div>
  

    <!-- end slider section -->
  </div>
  <!-- info section -->
  <section class="info_section ">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-3 info_logo">
          <div class="logo-box">
            <img src="images/logo-white.png" alt="">
            <span>
             NRNTYF
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
              NRNTYF@gmail.com
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

              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-3 info_news">
          <h5>
            Newsletter
          </h5>
          <form action="">
            <div>
              <input type="text" placeholder="Your Name">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>


    </div>
   
  </section>
 
    

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>