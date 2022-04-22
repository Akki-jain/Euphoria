<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
    <title>Euphoria | Goods</title>
    <style>
      :root {
      --surface-color: #fff;
      --curve: 40;
      }

      * {
        box-sizing: border-box;
      }

      .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 4rem 5vw;
        padding: 0;
        list-style-type: none;
      }

      .card {
        position: relative;
        display: block;
        height: 100%;  
        border-radius: calc(var(--curve) * 1px);
        overflow: hidden;
        text-decoration: none;
        box-shadow: 0 4px 8px 0 #00000010, 0 6px 20px 0 #00000010;
      }

      .card__image {      
        width: 100%;
        height: auto;
      }

      .card__overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;      
        border-radius: calc(var(--curve) * 1px);    
        background-color: var(--surface-color);      
        transform: translateY(100%);
        transition: .2s ease-in-out;
      }

      .card:hover .card__overlay {
        transform: translateY(0);
      }

      .card__header {
        position: relative;
        display: flex;
        align-items: center;
        gap: 2em;
        padding: 2em;
        border-radius: calc(var(--curve) * 1px) 0 0 0;    
        background-color: var(--surface-color);
        transform: translateY(-100%);
        transition: .2s ease-in-out;
      }

      .card__arc {
        width: 80px;
        height: 80px;
        position: absolute;
        bottom: 100%;
        right: 0;      
        z-index: 1;
      }

      .card__arc path {
        fill: var(--surface-color);
        d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
      }       

      .card:hover .card__header {
        transform: translateY(0);
      }

      .card__thumb {
        flex-shrink: 0;
        width: 50px;
        height: 50px;      
        border-radius: 50%;      
      }

      .card__title {
        font-size: 1em;
        margin: 0 0 .3em;
        color: #6A515E;
      }

      .card__tagline {
        display: block;
        margin: 1em 0;
        font-family: "MockFlowFont";  
        font-size: .8em; 
        color: #D7BDCA;  
      }

      .card__status {
        font-size: .8em;
        color: #D7BDCA;
      }

      .card__description {
        padding: 0 2em 2em;
        margin: 0;
        color: #D7BDCA;
        font-family: "MockFlowFont";   
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
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
      }

      li.nav a:hover {
        background-color: #111;
      }

    </style>
    <link rel="stylesheet" href="design.css">
</head>
<body>

    <div class="topnav">
        <form class="example" action="action_page.php">
        <a href="index.php" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
        <input type="text" placeholder="Search..">
        <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
        <a href="abc.html"><img src="icons/cart.svg" height="50" width="70" class="cart"></a>
        <a href="login.html"><img src="icons/user.svg" height="65" width="60" class="user"></a>
        </form>
      </div>

    <ul class="nav">
        
        <li class="nav"><a href="goods.php">Essential Goods</a></li>
        <li class="nav"><a href="hospitalservices.php">Hospital Services</a></li>
        <li class="nav"><a href="transport.html">Transport</a></li>
        <li class="nav"><a href="covid19test.php">Covid-19 Test</a></li>
        <li class="nav"><a href="bookanurse.html">Book A Nurse</a></li>
        <li class="nav"><a href="donation.html">Donation</a></li>
        <li class="nav"><a href="helpdesk.html">Help Desk</a></li>
        <li class="nav"><a href="about.html">About Us</a></li>
      </ul>

      
    <?php 
    include ('connect.php');
    $res=mysqli_query($con,"select * from product_details;");
    echo "<table cellpadding=15px>";
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"?><?php echo $row['product_id'];?><?php echo "</td>";

      echo "<td>"?><?php echo $row['pname'];?><?php echo "</td>";

      echo "<td>"?><?php echo $row['qty'];?><?php echo "</td>";

      echo "<td>"?><?php echo $row['cost'];?><?php echo "</td>";
 
      echo "<td>"?><?php echo $row['descriptions'];?>><?php echo "</td>";

      echo "<td>"?><img src="<?php echo $row['image'];?>" width=100px height=100px><?php echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>

        <ul class="cards">
          <li>
            <a href="" class="card">
              <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
              <div class="card__overlay">
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                  <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                  <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>            
                    <span class="card__status">1 hour ago</span>
                  </div>
                </div>
                <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
              </div>
            </a>      
          </li>
          <li>
            <a href="" class="card">
              <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
              <div class="card__overlay">        
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                  <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                  <div class="card__header-text">
                    <h3 class="card__title">kim Cattrall</h3>
                    <span class="card__status">3 hours ago</span>
                  </div>
                </div>
                <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
              </div>
            </a>
          </li>
          <li>
            <a href="" class="card">
              <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
              <div class="card__overlay">
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                  <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                  <div class="card__header-text">
                    <h3 class="card__title">Jessica Parker</h3>
                    <!-- <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>             -->
                    <span class="card__status">1 hour ago</span>
                  </div>
                </div>
                <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
              </div>
            </a>
          </li>
          <li>
            <a href="" class="card">
              <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
              <div class="card__overlay">
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                  <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                  <div class="card__header-text">
                    <h3 class="card__title">kim Cattrall</h3>
                    <span class="card__status">3 hours ago</span>
                  </div>          
                </div>
                <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
              </div>
            </a>
          </li>    
        </ul>
      <br><br>
    </body>
    </html>
