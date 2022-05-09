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
    <title>Euphoria | Hospitals</title>
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
      <br><br>

      <form action="hospitalservices.php" method="post">
            <input type="button" value="Back" id="back" onclick="history.back()" class="button2">
            <center style="margin-top: -45px;">
            <input type="text" name="valueToSearch" placeholder="Enter Area Name or Pincode" style="border-radius: 12px; border: 1px solid #FF7527; font-size: 12px; font-weight: bold; padding: 12px 45px; transition: transform 80ms ease-in; width: 420px; text-align: center;">
            
            <input type="submit" name="search" value="Search" class="button1"><br><br>
            
            <table cellspacing="0px" cellpadding="13px">
                <tr >
                <th  style="width: 60px;" class="datalooks">ID</th>
                <th  style="width: 320px;"class="datalooks">Name</th>
                <th  style="width: 300px;" class="datalooks">Type</th>
                <th  style="width: 180px;" class="datalooks">Email ID</th>
                <th  style="width: 110px;" class="datalooks">Number</th>
                <th  style="width: 200px;" class="datalooks">Area</th>
                <th  style="width: 82px;" class="datalooks">City</th>
                <th  style="width: 112px;" class="datalooks">State</th>
                <th  style="width: 82px;" class="datalooks">Pincode</th>
                </tr>
                <?php

                if(isset($_POST['search']))
                {
                    $valueToSearch = $_POST['valueToSearch'];
                    $query = "SELECT * FROM hosp_details WHERE hpincode= '$valueToSearch' OR hstreet like '%$valueToSearch%'";
                    $search_result = filterTable($query);
                    
                }
                else 
                {
                    $query = "SELECT * FROM hosp_details";
                    $search_result = filterTable($query);
                }

                function filterTable($query)
                {
                    include('connect.php');
                    $filter_Result = mysqli_query($con, $query);
                    return $filter_Result;
                }
                ?>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class="datalooks">
                  <td><?php echo $row['hid']??''; ?></td>
                  <td><?php echo $row['hname']??''; ?></td>
                  <td><?php echo $row['htype']??''; ?></td>
                  <td><?php echo $row['hemail']??''; ?></td>
                  <td><?php echo $row['hnumber']??''; ?></td>
                  <td><?php echo $row['hstreet']??''; ?></td>
                  <td><?php echo $row['hcity']??''; ?></td>
                  <td><?php echo $row['hstate']??''; ?></td>
                  <td><?php echo $row['hpincode']??''; ?></td> 
                </tr>
                <?php endwhile;?>
            </table></center>
        </form>

        
        

    </body>
    </html>

