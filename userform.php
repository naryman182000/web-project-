<?php 
session_start();

	include("connection.php");
	include("functions.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $first_Name = $_POST['firstName'];
		$last_name = $_POST['lastName'];
        $email = $_POST['email'];
		$password = $_POST['Password'];
		$phone = $_POST['phone_Number'];
	#	$password = $_POST['password'];

		if(!empty($first_Name) &&!empty($last_name) &&!empty($email) && !empty($password)&& !empty($phone) && !is_numeric($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into customers (firstName,lastName,email,password,phone_Number,user_id) values ($first_Name,$last_name,'$email','$password',$phone ,'$user_id')";

			mysqli_query($con, $query);
      $query2="select  from customers user_id WHERE email=$email";
      mysqli_query($con, $query2);
         $subject = "This is subject";
         $header = "From:my-gmail-id@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail ($email,$subject,$query2,$header);

			header("Location: previewAdmin.php");
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

  <title>Transportz</title>
  
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
    </section>
    <!-- end header section -->
  <div id="user" >
    <h2 class="cz">Add User:-</h2>
    <form  class="siu" action="previewAdmin.php"  method="post" >
      <label for="fname">First name: </label>
      <input type="text" id="fname" placeholder="First Name" name="firstName" required ><br>
      <label for="lname">Last name: </label>
      <input type="text" id="lname"placeholder="Last Name" name="lastName" required ><br>
      <label for="mail">Email:</label>
      <input type="email" id="mail" placeholder="a@gmail.com" name="email" required ><br>
      <label for="phone_number" >phone_number:     </label>
      <input type="tel" id="pnum"placeholder="Phone Number"  name="phone_Number" required><br>
      <label for="password">password:</label><br>
      <input type="password" id="pass"placeholder="Password"   name="Password" required ><br>
      <label for="password">confirmed password:</label><br>
      <input  type="password" id="pass"placeholder="Confirmed Password"   name ="confirmed_paasword"  required><br>
     <button name="submit"  type="submit" class="submit1"  > submit  </button>
     <a href="users.php" class="submit2">bask</a>
    </form> 
    

  </div>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script></script>
  

</body>

</html>