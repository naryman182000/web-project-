<style>
 #error-msg{
  display: none;
  color: #ff2851;
  font-size: 14px;
  margin-top: 10px;
}
#error-msg1{
  display: none;
  color: #ff2851;
  font-size: 14px;
  margin-top: 2px;
}

</style>
<?php 
session_start();

	include("connection.php");
	include("functions.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $location = $_POST['location'];
    $distination = $_POST['distination'];
    $email = $_POST['email'];
    $hight = $_POST['hight'];
    $data= $_POST['data'];
    $typeofgoods= $_POST['typeofgoods'];
  
	#	$password = $_POST['password'];

		if(!empty($location) &&!empty($distination) &&!empty($email) && !empty($hight)&& !empty($data)&& !empty($typeofgoods) && !is_numeric($email))
		{

			$query = "insert into sea (location,distination,email,hight,data,typeofgoods,id) values ('$location','$distination','$email','$hight' ,'$data','$typeofgoods','$id')";

			mysqli_query($con, $query);

			header("Location: Select_your_order.php");
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
    <h2 class="cz">Order Information:-</h2>
    <form action="sea.php" method="post" >
      <br>
      
      <label for="location">location </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="location" type="text"id="location" required>
      <option > </option>
        <option >Cairo</option>
        <option>Alexandria</option>
        <option>Giza</option>
        <option>Port Said</option>
        <option>Suez</option>
        <option>Gharbia</option>
        <option>Dakahlia</option>
        <option>Asyut</option>
        <option>Fayoum</option>
        <option>Sharqia</option>
        <option>Ismailia</option>
        <option>Aswan</option>
        <option>Beheira</option>
        <option>Minya</option>
        <option>Damietta</option>
        <option>Luxor</option>
        <option>Qena</option>
        <option>Beni Suef</option>
        <option>Sohag</option>
        <option>Monufia</option>
        <option>Red Sea</option>
        <option>Qalyubia</option>
        <option>Kafr el-Sheikh</option>
        <option>Minya</option>
        <option>North Sinai</option>
        <option>Matruh</option>
      </select>
      <br>
     
      <label for="distination">distination: </label>
      <select type="text" id="distination" placeholder="distination" name="distination" required>
      <option > </option>
        <option >Cairo</option>
        <option>Alexandria</option>
        <option>Giza</option>
        <option>Port Said</option>
        <option>Suez</option>
        <option>Gharbia</option>
        <option>Dakahlia</option>
        <option>Asyut</option>
        <option>Fayoum</option>
        <option>Sharqia</option>
        <option>Ismailia</option>
        <option>Aswan</option>
        <option>Beheira</option>
        <option>Minya</option>
        <option>Damietta</option>
        <option>Luxor</option>
        <option>Qena</option>
        <option>Beni Suef</option>
        <option>Sohag</option>
        <option>Monufia</option>
        <option>Red Sea</option>
        <option>Qalyubia</option>
        <option>Kafr el-Sheikh</option>
        <option>Minya</option>
        <option>North Sinai</option>
        <option>Matruh</option>
      </select>
      <br>
      
      <label for="email" >Email:</label>
      <input type="email" id="mail" oninput="checker()" placeholder="email@gmail.com"  name="email" required><br>
      <div id="icon"> </div>
      <p id="error-msg">Please Enter A Valid Email</p>
      <br>
      <label for="hight">hight </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" min="20" max="200" name="hight" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="date">date </label>
      <input type="date" placeholder="--/--/--"  name="data"required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="text" >typeofgoods </label>
      <input type="text"  minlength="4" maxlength="8" id="typeofgoods" placeholder="typeofgoods" name="typeofgoods" required><br>
      <button name="submit" type="submit" class="submit" >submit</button>
    </form> 
    


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
 
  <script  src="js/password.js"></script>
  <script  src="js/submit.js"></script>
  <script  src="js/email.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>