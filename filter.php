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
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <form action="filter.php" method="post">
            <br><br>
            <input type="text" name="valueToSearch" placeholder="Enter the Pincode" style="border-radius: 18px; border: 1px solid #20dbc2; font-size: 12px; font-weight: bold; padding: 12px 45px; transition: transform 80ms ease-in; width: 142px; text-align: center;">
            <input type="submit" name="search" value="Search" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #20dbc2; color: white; font-size: 12px; font-weight: bold; padding: 12px 45px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;"><br><br>
            
            <table style="border: 4px solid #20dbc2; border-radius: 12px;">
                <thead  style="border: 2px solid #20dbc2;">
                <tr>
                 <th style="width: 60px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Hospital ID</th>
                 <th style="width: 300px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Name</th>
                 <th style="width: 300px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Type</th>
                 <th style="width: 180px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Email ID</th>
                 <th style="width: 110px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Number</th>
                 <th style="width: 180px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Street</th>
                 <th style="width: 82px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">City</th>
                 <th style="width: 82px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">State</th>
                 <th style="width: 82px; padding: 6px; border: 2px solid #20dbc2; border-radius: 12px;">Pincode</th>
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
            </table>
        </form>
        
    </body>
</html>
