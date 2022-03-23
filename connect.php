<?php      
    $host = "euphoria.catqrcagrpne.ap-south-1.rds.amazonaws.com";  
    $user = "admin";  
    $password = "Euphoria123";  
    $db_name = "euphoria";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  