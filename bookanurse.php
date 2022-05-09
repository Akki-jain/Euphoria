<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | Book A Nurse</title>
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
    
    <div class="container">
      <div class="row">
        <div class="column"><br><br>
          <img src="images/undraw_medical_care_movn.svg" height="500" width="500" style="margin-top:-40px; margin-left:80px;">
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.223841060108!2d77.6061888!3d12.9362362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88518f37b39dabd0!2sChrist%20(Deemed%20to%20be%20University)!5e0!3m2!1sen!2sin!4v1642857008423!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
    </div>
    <div class="column">
      <form method="POST" action="contact.php" >
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name">
        <label for="number">Number</label>
        <input type="text" id="number" name="number" placeholder="Enter Your Mobile Number">
        <label for="shift">Shift</label>

        <select id="shift" name="shift">
          <option value="Morning">Morning</option>
          <option value="Afternoon">Afternoon</option>
          <option value="Night">Night</option>
        </select>

        <label for="subject">Reason</label>
        <textarea id="subject" name="subject" placeholder="Write your reason to book a nurse" style="height:110px"></textarea>
        <a href=""><button type="submit" value="Submit" class="button1">Book</button></a>
      </form>
    </div>
     </div>
  </div>
      <br><br>
    </body>
    </html>
