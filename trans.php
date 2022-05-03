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
    <link rel="stylesheet" href="design.css">
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | Transport</title>
</head>
<body>

    <div class="topnav">
        <form class="example" action="action_page.php">
        <a href="index.php" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
        <input type="text" placeholder="Search..">
        <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
        <a href="cart.php"><img src="icons/cart.svg" height="50" width="70" class="cart"></a>
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
     
      <div class="container">
        <div class="row">
          <div class="column"><br><br>
          <?php 
          include ('connect.php');
          $start=$_POST['start'];
          $type=$_POST['type'];
          $destination=$_POST['destination'];
          $res=mysqli_query($con,"SELECT * from transport where start='$start' && destination='$destination' && type='$type'");
          while($row=mysqli_fetch_array($res)):?>
            <iframe src="<?php echo $row['map'];?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endwhile;?> 
            
          </div>
      <div class="column">
        <form method="POST" action="trans.php" >
            <br><br>
          <label for="start">Starting Point</label>
          <select id="start" name="start">
          <?php 
          include ('connect.php');
          $res=mysqli_query($con,"select distinct start from transport;");
          while($row=mysqli_fetch_array($res)):?>
            <option value="<?php echo $row['start'];?>"><?php echo $row['start'];?></option>
            <?php endwhile;?>  
          </select>


          <label for="destination">Destination</label>
          <select id="destination" name="destination">
            <?php 
          include ('connect.php');
          $res=mysqli_query($con,"select distinct destination from transport;");
          while($row=mysqli_fetch_array($res)):?>
            <option value="<?php echo $row['destination'];?>"><?php echo $row['destination'];?></option>
            <?php endwhile;?>  
          </select>
          </select>

          <label for="type">Type of Vehicle</label>
          <select id="type" name="type">
            <option value="....">....</option>
            <option value="Two-Wheeler">Two-Wheeler</option>
            <option value="Four-Wheeler">Four-Wheeler</option>
          </select>

          <br><br>
          <a href=""><button type="submit" value="Submit" class="button1" action="trans.php">Check Amount</button></a>
          <br><br>
          <input type="text" id="name" name="name" placeholder="Amount" value="<?php include('connect.php');
          
          $start=$_POST['start'];
          $type=$_POST['type'];
          $destination=$_POST['destination'];

          $sql1 = "SELECT * from transport where start='$start' && destination='$destination' && type='$type'";

          $result = $con->query($sql1);

          
          if ($result->num_rows > 0) 
          {
            
            while($row = $result->fetch_assoc())
            { 
              echo "₹ ";
              echo $row['amount'];
              echo "/-";
            }
          } 
          else if($type=='....')
          {
            echo "PLEASE ENTER THE TYPE OF VEHICLE!!!";
          }
          else {
              echo "NO DRIVER FOUND! PLEASE TRY AFER SOME TIME.";
          }

          ?>">
        </form>
        </div>
       </div>
    </div>
      
    </body>
    </html>



