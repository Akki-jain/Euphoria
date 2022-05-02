<?php

if(isset($_SESSION['customer_email']))
{
  $user=$_SESSION['customer_email'];
}

include 'header.php';

    $query = "SELECT * FROM orders WHERE users= '$user'";
    $search_result = filterTable($query);

function filterTable($query)
{
    include('connect.php');
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" /> -->
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16 px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
</head>
<body style="background-color: #FFF4EE;">

    <br>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back"  style="background-color: #FE7E6D;">
                        <img src="assets/img/find_user.png" class="img-responsive"  style="background-color: #FE7E6D;"/>      
                    </li>
                    <li>
                        <a href="home.php" style="color: #FE7E6D;"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>

                     <li>
                        <a href="order.php" style="color: #FE7E6D;"><i class="fa fa-desktop "></i>Order History</a>
                    </li>

                    <li>
                        <a href="#" style="color: #FE7E6D;"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php" style="color: #FE7E6D;">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#" style="color: #FE7E6D;">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#" style="color: #FE7E6D;">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#" style="color: #FE7E6D;">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#" style="color: #FE7E6D;">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#" style="color: #FE7E6D;">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Welcome <?php 
                        if(isset($_SESSION['customer_email']))
                        echo strtoupper($_SESSION['customer_email']); 
                        else
                        echo "Guest";
                        ?></h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr>
                    
                <div class="col-md-6">
                    <h5 style="margin:auto;">Order History</h5>
                </div>
            <br><br>
            <table style="padding:30px; border-collapse: collapse;">
                <tr style="padding:20px;">
                 <th style="width:200px; text-align:center;">Order_id</th>
                 <th style="width:200px; text-align:center;">Name</th>
                 <th style="width:500px; text-align:center;">Products</th>
                 <th style="width:200px; text-align:center;">Total</th>
                 <th style="width:200px; text-align:center;">Mode of Payment</th>
                </tr>

                <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                  <td style="padding:15px; text-align:center;"><?php echo $row['order_id']??''; ?></td>
                  <td style="padding:15px; text-align:center;"><?php echo $row['name']??''; ?></td>
                  <td style="padding:15px; text-align:center;"><?php echo $row['products']??''; ?></td>
                  <td style="padding:15px; text-align:center;"><?php echo $row['amount_paid']??''; ?></td>
                  <td style="padding:15px; text-align:center;"><?php echo $row['pmode']??''; ?></td>
                </tr>
                <?php endwhile;?>
        </table>



                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>



</body>
</html>
