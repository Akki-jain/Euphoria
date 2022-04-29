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
  <title>Euphoria </title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
  <link rel="stylesheet" href="design.css">

  <body>
    <div class="topnav">
        <form class="example" action="index.php" method="post">
        <a href="index.php" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
        <input type="text" placeholder="Search.." name="bar" id="bar">
        <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
        <a class="nav-link" href="cart.php"><img src="icons/cart.svg" height="50" width="70" class="cart"><p id="cart-item" style="margin-top:-50px; margin-left:360px; background-color: #ca1f08; color: #ffffff; border-radius: 5px;" class="badge badge-danger"></p></a>
        <a href="sign.php"><img src="icons/user.svg" height="65" width="60" class="user"></a>
        <a href="index.php" style="margin-top:24px" ><?php if(isset($_SESSION['customer_email']))
    {
      echo "HI, ". strtoupper($user);
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
            <li class="nav"><a href="bookanurse.html">Book A Nurse</a></li>
            <li class="nav"><a href="donation.html">Donation</a></li>
            <li class="nav"><a href="helpdesk.html">Help Desk</a></li>
            <li class="nav"><a href="about.html">About Us</a></li>
        </ul>
  </body>
</html>