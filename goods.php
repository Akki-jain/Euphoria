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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Euphoria | Essential Goods</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
  <link rel="stylesheet" href="design.css">
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' /> -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> -->
  <style>
      :root {
      --surface-color: #fff;
      --curve: 40;
      }

      * {
        box-sizing: border-box;
      }
      /* 
      .add_cart:hover{
        box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000030;
      } */

      .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, .2fr));
        gap: 2rem;
        margin: 4rem 5vw;
        padding: 0;
        list-style-type: none;
      }

      .card {
        position: relative;
        display: block;
        height: 310px;  
        border-radius: calc(var(--curve) * 1px);
        overflow: hidden;
        text-decoration: none;
        box-shadow: 0 4px 8px 0 #00000010, 0 6px 20px 0 #00000010;
      }

      .card:hover {
        box-shadow: 0 4px 8px 0 #00000020, 0 6px 20px 0 #00000020;
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
        transition: .3s ease-in-out;
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
        font-size: 1.3em;
        color: #FF7527;
      }

      .card__description {
        padding: 0 2em 2em;
        margin: 0;
        color: grey;
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
      
      :root {
        --button-background: dodgerblue;
        --button-color: white;
        
        --dropdown-highlight: dodgerblue;
        --dropdown-width: 160px;
        --dropdown-background: white;
        --dropdown-color: black;
      }

      /* Dropdown styles */
      .dropdown {
        position: absolute;
        padding: 0;
        border: none;
      }

      .dropdown summary {
        list-style: none;
        list-style-type: none;
      }

      .dropdown > summary::-webkit-details-marker {
        display: none;
      }

      .dropdown summary:focus {
        outline: none;
      }

      .dropdown summary:focus a.button {
        border: 2px solid white;
      }

      .dropdown summary:focus {
        outline: none;
      }

      .dropdown ul {
        position: absolute;
        margin: 20px 0 0 0;
        margin-top:-15px;
        padding: 20px 0;
        width: var(--dropdown-width);
        left: 50%;
        margin-left: calc((var(--dropdown-width) / 2)  * -1);
        box-sizing: border-box;
        z-index: 2;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.218), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        background: var(--dropdown-background);
        border-radius: 6px;
        list-style: none;
      }

      .dropdown ul li {
        padding: 0;
        margin: 0;
      }

      .dropdown ul li input {
        background-color:white;
        padding:10px;
        color:black;
        border:none;
        width:100%;

      }

      .dropdown ul li input:hover {
        background-color: #FF7527;
        color: var(--dropdown-background);
      }

      /* Dropdown triangle */
      .dropdown ul::before {
        content: ' ';
        position: absolute;
        width: 0;
        height: 0;
        top: -10px;
        left: 50%;
        margin-left: 10px;
        border-style: solid;
        border-width: 0 10px 10px 10px;
        border-color: transparent transparent var(--dropdown-background) transparent;
      }

      

      /* Close the dropdown with outside clicks */
      .dropdown > summary::before {
        display: none;
      }

      .dropdown[open] > summary::before {
          content: ' ';
          display: block;
          position: fixed;
          top: 0;
          right: 0;
          left: 0;
          bottom: 0;
          z-index: 1;
      }
      .cartbt{
        width:80%;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color:;
        border:solid 2px orange;
        cursor: pointer;
        transition:0.4s all;
        /* box-shadow: 0 4px 8px 0 #b1717133, 0 6px 20px 0 #00000030; */
        border-top-right-radius: 25px;
        border-bottom-left-radius: 25px;
        background: linear-gradient(#FE7E6D,#ff9d64);
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: 0% 50%;
        

      }
      .cartbt:hover{
        /* background-color: rgba(255, 148, 148, 0.778); */
        transition:0.4s all;
        background-size: 100% 100%;
        border-top-left-radius: 25px;
        border-bottom-right-radius: 25px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
      }
      .cartIcon{

      height: 40px;
      width: 100px;
      float:center;
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

    <?php 

      if(isset($_POST['bar']))
      {
          $valueToSearch = $_POST['bar'];
          $query = "SELECT * FROM product_details WHERE pname like '%$valueToSearch%' OR descriptions like '%$valueToSearch%'";
          $search_result = filterTable($query);
      }
      else if(isset($_POST['filter']))
      {
        $name = $_POST['filter'];
        // $ord="asc";
        if($name=="Price ↑")
          {
            $name="cost";
            $ord="asc";
          }
        if($name=="Price ↓")
          {
            $name="cost";
            $ord="desc";
          }
        if($name=="Name ↑")
          {
            $name="pname";
            $ord="asc";
          }
        if($name=="Name ↓")
          {
            $name="pname";
            $ord="desc";
          }
        $query = "SELECT * FROM product_details order by $name $ord";
        $search_result = filterTable($query);
      }
      else
      {
          $query = "SELECT * FROM product_details";
          $search_result = filterTable($query);

      }

      function filterTable($query)
      {
          include('connect.php');
          $filter_Result = mysqli_query($con, $query);
          return $filter_Result;
      }

      // include ('connect.php');
      // $res=mysqli_query($con,"select * from product_details;");
    ?>

    <div style=" margin-left:20px; margin-top:10px; margin-bottom:10px">
    <form class="filterform" action="goods.php" method="post">
    <details class="dropdown">
    <summary role="button">
      <img src="icons/filter.svg" alter="Sort" height=40 width=100 />
    </summary>
        <ul>
          <li><input type="submit" class="filterbutton" name="filter" value="Price ↑"></li>
          <li><input type="submit" class="filterbutton" name="filter" value="Price ↓"></li>
          <li><input type="submit" class="filterbutton" name="filter" value="Name ↑"></li>
          <li><input type="submit" class="filterbutton" name="filter" value="Name ↓"></li>
      </ul>
    </details>
    </div>
    </form>
  <ul class="cards">
          <?php while($row=mysqli_fetch_array($search_result)):?>
          <li>
            <div class="card">
              <img src=<?php echo $row['image'];?> class="card__image" alt="" />
              <div class="card__overlay">
                <div class="card__header">
                  <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                  <!-- <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" /> -->
                  <div class="card__header-text">
                    <h3 class="card__title"><?php echo $row['pname'];?></h3>            
                    <span class="card__status">₹ <?php echo $row['cost'];?></span>    
                  </div>
                </div>
                <p class="card__description"><?php echo $row['descriptions'];?></p>
              <form action="" class="form-submit">
                <div style="margin-left:50px">Quantity:
                  <input type="number" style="width:130px; border-radius:6px; border-color:#FF7527; padding:4px" class="form-control pqty" value="1"></div>
                  <input type="hidden" class="pid" value="<?= $row['product_id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['pname'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['cost'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_id'] ?>">
                  <center><button class="cartbt"><img class = "cartIcon" src = "icons/addcart.svg"></button></center>
                <!-- <a href="" class="addItemBtn"><center><img src="icons/add.svg" class="add_cart" alt="Add to cart" width=220px height=80px style="margin-top:0px;" /></center></a> -->
              </form>
              </div>
          </div>
          </li>
          <?php endwhile;?>
          
        </ul>

        
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".cartbt").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>