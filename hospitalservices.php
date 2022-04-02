<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM hosp_details WHERE hpincode= '$valueToSearch'";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="design.css">
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | Hospitals</title>
</head>
<body>

    <div class="topnav">
        <form class="example" action="action_page.php">
        <a href="index.html" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
        <input type="text" placeholder="Search..">
        <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
        <a href="abc.html"><img src="icons/cart.svg" height="50" width="70" class="cart"></a>
        <a href="login.html"><img src="icons/user.svg" height="65" width="60" class="user"></a>
        </form>
      </div>

    <ul>
        
        <li><a href="goods.html">Essential Goods</a></li>
        <li><a href="hospitalservices.php">Hospital Services</a></li>
        <li><a href="transport.html">Transport</a></li>
        <li><a href="covid19test.html">Covid-19 Test</a></li>
        <li><a href="bookanurse.html">Book A Nurse</a></li>
        <li><a href="donation.html">Donation</a></li>
        <li><a href="helpdesk.html">Help Desk</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
      <br><br>

      <form action="hospitalservices.php" method="post">
            <input type="button" value="Back" id="back" onclick="history.back()" class="button2">
            <center style="margin-top: -45px;">
            <input type="text" name="valueToSearch" placeholder="Enter the Pincode" style="border-radius: 12px; border: 1px solid #FF7527; font-size: 12px; font-weight: bold; padding: 12px 45px; transition: transform 80ms ease-in; width: 242px; text-align: center;">
            
            <input type="submit" name="search" value="Search" class="button1"><br><br>
            
            <table cellspacing="5px" cellpadding="5px" style="border: 3px solid #FF7527; border-radius: 10px;">
                <thead  style="border: 2px solid #FF7527;">
                <tr>
                <th style="width: 60px; border: 2px solid #FF7527; border-radius: 8px;">ID</th>
                <th style="width: 300px; border: 2px solid #FF7527; border-radius: 8px;">Name</th>
                <th style="width: 300px; border: 2px solid #FF7527; border-radius: 8px;">Type</th>
                <th style="width: 180px; border: 2px solid #FF7527; border-radius: 8px;">Email ID</th>
                <th style="width: 110px; border: 2px solid #FF7527; border-radius: 8px;">Number</th>
                <th style="width: 180px; border: 2px solid #FF7527; border-radius: 8px;">Street</th>
                <th style="width: 82px; border: 2px solid #FF7527; border-radius: 8px;">City</th>
                <th style="width: 82px; border: 2px solid #FF7527; border-radius: 8px;">State</th>
                <th style="width: 82px; border: 2px solid #FF7527; border-radius: 8px;">Pincode</th>
                </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
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
