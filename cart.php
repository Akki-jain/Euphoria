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
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Euphoria | Cart</title>
  <link rel="icon" type="image/x-icon" href="icons/favicon.ico">
  <link rel="stylesheet" href="design.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> -->
  <style>
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

<body>
   <div class="topnav">
    <form class="example" action="index.php" method="post">
    <a href="index.php" style = "color:FE7E6D; margin-top: 12px;"><img src="images/Euphoria1.png" height=60 width=120 valign=middle></a>
    <input type="text" placeholder="Search.." name="bar" id="bar">
    <button type="submit"><i class="fa-search"><img src="icons/search.svg" width="20" height="20" valign="middle"></i></button>
    <a class="nav-link" href="cart.php"><img src="icons/cart.svg" height="50" width="70" class="cart"><span id="cart-item" class="badge badge-danger"></span></a>
    <?php if(isset($_SESSION['customer_email']))
            {
            echo "  ";
            }
            else
            {
            echo "<a href='sign.php'><img src='icons/user.svg' height='65' width='100' class='user'></a>";
            } ?>
    <a href="index.php" style="margin-top:24px" ><?php if(isset($_SESSION['customer_email']))
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
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'connect.php';
                $stmt = $con->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['product_id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['product_id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['product_id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><img src="icons/del.png" width=25px/></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="goods.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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