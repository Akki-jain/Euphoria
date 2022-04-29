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

          ?>