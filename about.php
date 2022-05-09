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
    <meta charset="UTF-8">
    <style>
      /* body{background: linear-gradient(90deg, #BA68C8 0%, #AB47BC 100%)} */
      .containers{background-color: white;text-align: center;border-radius: 20px;margin-bottom:50px; margin-top:0px;margin-left:150px}
      .card-title{margin-top:10px; margin-bottom:-30px}
      .icon{position: relative;bottom: 11px}
      .mt-100{margin-top: 100px}
      .profile img{width: 68px;height: 68px;border-radius: 50%}
      .card{border-radius: 15px;margin-left: 30px;margin-right: 30px;box-shadow: 0 10px 20px rgba(0, 0, 0, .1);width:200px;}
      .card-body{position: relative;bottom: 35px;}
      .btn{margin-top: 36px;margin-bottom: 45px;background-color: #AB47BC;border: none;color: #fff}
      .btn:hover{-webkit-transform: scale(1.05);-ms-transform: scale(1.05);transform: scale(1.05);color: #fff}
    </style>
    <link rel="stylesheet" href="design.css">
    
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | About Us</title>
</head>
<body>

  <div class="topnav">
    <form class="example" action="goods.php" method="post">
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
  </div>

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
      <div class='containers'>
    <div class="row" style="justify-content: center">
        <div class="card col-md-3 mt-100">
            <div class="card-content">
                <div class="card-body p-0">
                    <div class="profile"> <img src="members/Akshat.jpg"> </div>
                    <div class="card-title"><a href = "mailto: akshat.jain@science.christuniversity.in" style="text-decoration: none; color:#FF7527;">Akshat Jain</a> </div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 mt-100">
            <div class="card-content">
                <div class="card-body p-0">
                    <div class="profile"> <img src="https://i.imgur.com/8RKXAIV.jpg"> </div>
                    <div class="card-title"><a href = "mailto: ankita.dugar@science.christuniversity.in" style="text-decoration: none; color:#FF7527;"> Ankita Dugar</a></div>
                </div>
            </div>
        </div>
        <div class="card col-md-3 mt-100">
            <div class="card-content">
                <div class="card-body p-0">
                    <div class="profile"> <img src="https://i.imgur.com/Ur43esv.jpg"> </div>
                    <div class="card-title"><a href = "mailto: parth.pathak@science.christuniversity.in" style="text-decoration: none; color:#FF7527;"> Parth Pathak</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="columns">
          <h1 style="font-family:monospace;color:#FF7527; font-size:28px">About Us</h1>
          <p >"<b><i>We rise to great heights by a winding staircase of small steps."</i></b> - We thrive to save them time while meeting their medical needs, health and well-being. 
            <br>We came up with the concept of creating a Specially Abled Management project in which consumers are allowed to review the services offered.
            <br>The project aims to develop application software to aid the differently-abled or physically disabled.<br>
            </p><br>
            <p >
            The principal purpose of the Specially Abled Management System project is to manage the hospital, doctor, transportation, and delivery information online and in one location.<br>
            This system will take the place of the present manual system. The objective is to use our website to automate the current manual approach to suit their demands and save their critical information for future reference.
            <br>It also attempts to link the necessary departments in order to provide individuals with quick access.
            </p><br>
            <p >
            Life is difficult for all and amidst COVID 19 it has become worse for many, but the plight of those physically challenged people is unimaginable.<br> 
            Our ambition is to provide a user-friendly experience to those people which not only provides them with help but also gets them all their necessities and requirements. 
            <br>The website that we are creating makes sure that the users get all the information they want, necessities they require, help that they need and support that they receive.
            </p>
        </div>
</body>
</html>