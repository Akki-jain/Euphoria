<?php

	include('connect.php');

		$uname=$_POST['username'];
		$passw=$_POST['password'];
		$sql="select * from user_details where username= '$uname'AND password='$passw'";

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count == 1)
        {  
            include 'index.php'; 
        }  
        else
        {  
            echo "<center>Invalid Username or Password</center>";
            echo "<center><button type='button' name='sign' class='button2' onclick='history.back()'>Back</button></center>";
             
        }   
        
        mysql_close($con);  
?>

