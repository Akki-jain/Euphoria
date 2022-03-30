<?php

include('connect.php');

$start=$_POST['start'];
$destination=$_POST['destination'];

$sql1 = "SELECT * from transport where start='$start' && destination='$destination'";

$result = $con->query($sql1);

if ($result->num_rows > 0) 
{
  
  while($row = $result->fetch_assoc())
 {
     
      echo  "Your amount is ". $row['amount'] . "<br>";
  }
} 
else {
    echo "No Driver found! Please try after some time";
    echo "<center><button type='button' name='sign' class='button2' onclick='history.back()'>Back</button></center>";
}

?>