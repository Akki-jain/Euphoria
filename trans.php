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
        <a href="index.html" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
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
     
      <div class="container">
        <div class="row">
          <div class="column"><br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7777.277390802726!2d77.60391562365176!3d12.930927870315594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14531eedd659%3A0x3cde8534fb610682!2sS.G.%20Palya%2C%20Bengaluru%2C%20Karnataka%20560029!5e0!3m2!1sen!2sin!4v1648454663265!5m2!1sen!2sin" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      <div class="column">
        <form method="POST" action="trans.php" >
            <br><br>
          <label for="start">Starting Point</label>
          <select id="start" name="start">
            <option value="....">....</option>
            <option value="SG Palya">SG Palya</option>
            <option value="Domlur">Domlur</option>
            <option value="Indiranagar">Indiranagar</option>
            <option value="Koramangla">Koramangla</option>
            <option value="JP Nagar">JP Nagar</option>
            <!-- <option value="usa">USA</option> -->
          </select>

          <label for="destination">Destination</label>
          <select id="destination" name="destination">
            <option value="....">....</option>
            <option value="Majestic">Majestic</option>
            <option value="Magrath Road">Magrath Road</option>
            <option value="Vijaynagar">Vijaynagar</option>
            <option value="Banerghatta">Banerghatta</option>
            <option value="Airport">Airport</option>
            <!-- <option value="usa">USA</option> -->
          </select>

          <label for="start">Type of Vehicle</label>
          <select id="type" name="type">
            <option value="....">....</option>
            <option value="Two-Wheeler">Two-Wheeler</option>
            <option value="Four-Wheeler">Four-Wheeler</option>
          </select>

          <br><br>
          <a href=""><button type="submit" value="Submit" class="button1" action="trans.php">Check Amount</button></a>
          <br><br>
          <input type="text" id="name" name="name" placeholder="Amount" value="

          <?php include('connect.php');

          $start=$_POST['start'];
          $type=$_POST['type'];
          $destination=$_POST['destination'];

          $sql1 = "SELECT * from transport where start='$start' && destination='$destination' && type='$type'";

          $result = $con->query($sql1);

          if ($result->num_rows > 0) 
          {
            
            while($row = $result->fetch_assoc())
          {
              
                echo $row['amount'];
            }
          } 
          else {
              echo "No Driver found! Please try after some time.";
          }

          ?>">
        </form>
        </div>
       </div>
    </div>
      
    </body>
    </html>



