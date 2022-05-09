<?php
session_start();
if(isset($_SESSION['customer_email']))
{
  $user=$_SESSION['customer_email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Euphoria | Home</title>
    <link rel="stylesheet" href="carousel.css">
    <?php 
    // if(null!==$_GET['theme'])
    // {$theme=$_GET['theme'];
    // if($theme=="dark")
    // {
    //   echo "<link rel='stylesheet' href='design2.css'>";
    // }
    // else
    //   echo "<link rel='stylesheet' href='design.css'>";}
    ?>
    <link rel='stylesheet' href='design.css'>
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    
</head>
<body>

    <div class="topnav">
            <form class="example" action="index.php" method="post">
            <a href="index.php" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
            <input type="text" placeholder="Search.." name="bar" id="bar">
            <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
            <a class="nav-link" href="cart.php"><img src="icons/cart.svg" height="50" width="70" class="cart"><p id="cart-item" style="margin-top:-50px; margin-left:220px; background-color: #ca1f08; color: #ffffff; border-radius: 4px;" class="badge badge-danger"></p></a>
            <?php if(isset($_SESSION['customer_email']))
            {
            echo "  ";
            }
            else
            {
            echo "<a href='sign.php'><img src='icons/user.svg' height='65' width='100' class='user'></a>";
            } ?>
            
            <a href="home.php" style="margin-top:24px" ><?php if(isset($_SESSION['customer_email']))
            {
            echo "&emsp;&emsp; Hi, ". strtoupper($user);
            }
            else
            {
            echo "HI, Guest";
            } ?></a>
            </form>
              <!-- <form action='index.php' method='get'>
                <input type="submit" name="theme" id="theme" value="dark">
              </form> -->
        </div>
  <?php
      if(isset($_POST['bar']))
        {  
        $pagesearch=$_POST['bar'];
          if(strpos(' goods essential aids wheelchair medicine stick prostheses walkers',$pagesearch))
          echo "<script>window.open('goods.php','_self')</script>";
          else if(strpos(' hospital institute ',$pagesearch))
          echo "<script>window.open('hospitalservices.php','_self')</script>";
          else if(strpos(' transport travel move go vehicle directions destination ',$pagesearch))
          echo "<script>window.open('transport.php','_self')</script>";
          else if(strpos(' covid corona test centre ',$pagesearch))
          echo "<script>window.open('covid19test.php','_self')</script>";
          else if(strpos(' book nurse assistance ',$pagesearch))
          echo "<script>window.open('bookanurse.php','_self')</script>";
          else if(strpos(' donation donate money ',$pagesearch))
          echo "<script>window.open('donation.php','_self')</script>";
          else if(strpos(' help desk remarks query problem review rating ',$pagesearch))
          echo "<script>window.open('helpdesk.php','_self')</script>";
          else if(strpos(' us euphoria about',$pagesearch))
          echo "<script>window.open('about.php','_self')</script>";
          else
          echo "<script>window.open('index.php','_self')</script>";
        }
  ?>
  
    <ul class="nav">
         
        <li class="nav"><a href="goods.php">Essential Goods</a></li>
        <li class="nav"><a href="hospitalservices.php">Hospital Services</a></li>
        <li class="nav"><a href="transport.php">Transport</a></li>
        <li class="nav"><a href="covid19test.php">Covid-19 Test</a></li>
        <li class="nav"><a href="bookanurse.php">Book A Nurse</a></li>
        <li class="nav"><a href="donation.php">Donation</a></li>
        <li class="nav"><a href="helpdesk.php">Help Desk</a></li>
        <li class="nav"><a href="about.php">About Us</a></li>
    </ul>

    <br>
      <!-- <img src="images/carousel.jpg" height="580" width="1500"> -->

      <div class="carcontainer">
        <div class="carousel">
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
          <div class="carousel__face"></div>
        </div>
      </div>
      
      <center><input type="button" value="Become Member Now" onclick="location.href = 'sign.php'" class="homebutton"></center>
      <br><br>
      <p align="left" style="margin-top: 200px; margin-left: 50px; font-family:'Lucida Sans'; font-size: medium;"><font color="FF7527">At EUPHORIA</font>, 
        we seek to remove barriers between the specially-abled and the rest of the world. <br>We give an easy-to-use environment with all of the necessary assistance. 
        It could <br>be transportation, a nurse, education, or a hospital. All of these are there at your fingertips.
    <div style="text-align: right; vertical-align: middle; margin-top: -220px; margin-right: 50px; "><img src="images/undraw_fatherhood_-7-i19.svg" height="350" width=500" valign="middle" style="animation: example 5s ease-in 2s infinite alternate;"></div>
    </p>

    <br><br>
      <p align="right" style="margin-top: 200px; margin-right: 50px; font-family:'Lucida Sans'; font-size: medium;"><font color="FF7527">Specially-abled person</font> who is in 
        requirement of basic goods can order it <br>from the website, e.g., Deaf person may need a hearing aid, blind would <br>need a stick 
        or black glasses, a legless person would need wheelchairs or <br>leg supporters, etc. There is a variety of products available in this module.
    <div style="text-align: left; vertical-align: middle; margin-top: -220px; margin-left: 50px;"><img src="images/undraw_deliveries_2r4y.svg" height="350" width=500" valign="middle"></div>
    </p>

    <br><br>
      <p align="left" style="margin-top: 200px; margin-left: 50px; font-family:'Lucida Sans'; font-size: medium;">We will provide the list of <font color="FF7527">hospitals
         nearby</font> that deals with such cases. In case of <br>emergency, you can quickly get the information of the various <br>nearby hospitals immediately 
         who can help them with their disease/problem.
    <div style="text-align: right; vertical-align: middle; margin-top: -220px; margin-right: 50px;"><img src="images/undraw_medicine_b-1-ol.svg" height="350" width=500" valign="middle"></div>
    </p>

    <br><br>
      <p align="right" style="margin-top: 200px; margin-right: 50px; font-family:'Lucida Sans'; font-size: medium;">Specially-abled personWe provide <font color="FF7527">transport 
        facilities</font> to physically challenged people. <br>You can easily book a ride if you want to go anywhere around the city.
    <div style="text-align: left; vertical-align: middle; margin-top: -220px; margin-left: 50px;"><img src="images/undraw_city_driver_re_0x5e.svg" height="350" width=500" valign="middle"></div>
    </p>
    <br><br><br>

    <div class="flex-container">
      <div><a href="goods.php" style="text-decoration:none; color:black">Essentials for Blindness<img src="images/undraw_pedestrian_crossing_l-6-jv.svg" height="280" width="230" valign="bottom" style="margin-top:-50px"></a></div>
      <div><a href="goods.php" style="text-decoration:none; color:black">Medicine for all<img src="images/undraw_medical_care_movn.svg" height="250" width="200" valign="bottom" style="margin-top:-40px"></a></div>
      <div><a href="goods.php" style="text-decoration:none; color:black">Essentials for limb problems<img src="images/undraw_injured_9757.svg" height="180" width="160" valign="bottom" style="margin-top:-20px"></a></div>
      <div><a href="goods.php" style="text-decoration:none; color:black">Essentials for Deafness<img src="images/undraw_meditation_re_gll0.svg" height="280" width="220" valign="bottom" style="margin-top:-60px"></a></div>
      <div><a href="transport.php" style="text-decoration:none; color:black">Transport Services<img src="images/undraw_city_driver_re_0x5e.svg" height="250" width="200" valign="bottom" style="margin-top:-50px"></a></div>  
    </div>
    <br><br><br>

    <!-- <div class="footer">
			<div class="social">
				<a href="#" class="fa fa-facebook-f"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-snapchat"></a>
			</div>
			<p class="euph">Euphoria</p>
		</div> -->
            
</body>
</html>

