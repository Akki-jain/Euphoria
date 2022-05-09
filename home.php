<?php
if(isset($_SESSION['customer_email']))
{
  $user=$_SESSION['customer_email'];
}
include 'header.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->

    <style>

        #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        }

        #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #ddd;
        font-size: 18px;
        }

        #myTable th, #myTable td {
        text-align: left;
        padding: 14px;
        }

        #myTable tr {
        border-bottom: 2px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
        background-color: #f1f1f5;
        }
        /* Add a black background color to the top navigation bar */
        .topnav {
            overflow: hidden;
            position:sticky;
            background-color: #FFF4EE;
            margin-top: -8px;
            margin-left: -8px;
            margin-right: -8px;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            display: block;
            color: #FE7E6D;
            text-align: center;
            padding: 4px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        /* Style the "active" element to highlight the current page */
        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }
        
        /* Style the search box inside the navigation bar */
        .topnav input[type=text] {
            float: center;
            padding: 6px;
            border: none;
            margin-top: 15px;
            margin-left: 300px;
            font-size: 17px;
            box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000030;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
        }
        
        /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
        @media screen and (max-width: 600px) {
            .topnav a, .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            padding: 14px;
            }
            /* .topnav input[type=text] {
            border: 1px solid #ccc;
            } */
        }

        ul.nav {
            position:sticky; 
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #2E1000;
            margin-left: -8px;
            margin-right: -8px;
            box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000030;
        }

        li.nav {
            float: left;
        }
        
        li.nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            width:12.3vw;
            transition-duration:  0.4s;
        }

        li.nav a:hover {
            background-color: #111;
            letter-spacing: 1px;
        }
        
        * {
            box-sizing: border-box;
        }
        
        /* Style the search field */
        form.example input[type=text] {
            padding: 12px;
            font-size: 15px;
            float: left;
            width: 500px;
            background: #f1f1f1;
            border: hidden;
            outline: none;
        }

        form.example  input:active{
            box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000030;
        }
        
        /* Style the submit button */
        form.example button {
            float: left;
            width: 40px;
            height: 42px;
            margin-top: 15px;
            padding: 12px;
            background: #FF7527;
            border: #FF7527;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000030;
        }
        
        form.example button:hover {
            background: #ca5510;
        }
        
        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        .fa-search{
            margin-left: -4px;
        }

        img.cart{
            margin-left: 10em;
            margin-top:7px;
        }


        .user{
        margin-top:7px;
        }
</style>
</head>
<body style="background-color: #FFF4EE;">
        <br>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back" style="background-color: #FE7E6D;">
                        <img src="assets/img/find_user.png" class="img-responsive"  style="background-color: #FE7E6D; margin-left:60px"/>   
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
                                <a href="#" style="color: #FE7E6D;">Second Level Link</a>
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
        <div id="page-wrapper" style="margin-top:-23px">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Welcome <?php 
                        if(isset($_SESSION['customer_email']))
                        echo strtoupper($_SESSION['customer_email']); 
                        // echo $_SESSION['customer_email']; 
                        else
                        echo "Guest";
                        ?></h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                    <div class="col-md-6">
                        
                        
                        <a href="logout.php"><button class="button2">Logout</button></a>
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
