<?php
session_start();
if(isset($_SESSION['customer_email']))
{
  $user=$_SESSION['customer_email'];
}
?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM covid_centres WHERE pincode= '$valueToSearch'";
    $search_result = filterTable($query);
    
}
else 
{
    $query = "SELECT * FROM covid_centres";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    include('connect.php');
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | Covid-19</title>
    <style>
    table {
        border: 2px solid #FE7E6D;
        border-collapse:;
        border-radius: 20px;
        }

    .datalooks:hover {
        background-color: #ff9252;
        color: white;
        }
    </style>
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
      <br><br>

      <form action="covid19test.php" method="post">
            <input type="button" value="Back" id="back" onclick="history.back()" class="button2">
            <center style="margin-top: -45px;">
            <input type="text" name="valueToSearch" placeholder="Enter the Pincode" style="border-radius: 12px; border: 1px solid #FF7527; font-size: 12px; font-weight: bold; padding: 12px 45px; transition: transform 80ms ease-in; width: 242px; text-align: center;">
            
            <input type="submit" name="search" value="Search" class="button1"><br><br>
            
            <table cellspacing="0px" cellpadding="15px">
                <thead  style="border: 2px solid #FF7527;">
                <tr>
                <th style="width: 60px;" class="datalooks">ID</th>
                <th style="width: 300px;" class="datalooks">Centre Name</th>
                <th style="width: 180px;" class="datalooks">Centre Number</th>
                <th style="width: 360px;" class="datalooks">Address</th>
                <th style="width: 82px;" class="datalooks">City</th>
                <th style="width: 82px;" class="datalooks">State</th>
                <th style="width: 82px;" class="datalooks">Pincode</th>
                </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class="datalooks">
                  <td><?php echo $row['covid_id']??''; ?></td>
                  <td><?php echo $row['building']??''; ?></td>
                  <td><?php echo $row['cnumber']??''; ?></td>
                  <td><?php echo $row['address']??''; ?></td>
                  <td><?php echo $row['city']??''; ?></td>
                  <td><?php echo $row['state']??''; ?></td>
                  <td><?php echo $row['pincode']??''; ?></td> 
                </tr>
                <?php endwhile;?>
            </table></center>
        </form>
    </body>
    </html>
