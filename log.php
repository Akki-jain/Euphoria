<?php

	include('connect.php');

		$uname=$_POST['username'];
		$passw=$_POST['password'];
		$sql="select * from users where username= '$uname'AND password='$passw'";

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count == 1)
        {  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else
        {  
            $_SESSION["error"]="Invalid Username or Password"; 
            header("Location: log.html");
        }     
?>

