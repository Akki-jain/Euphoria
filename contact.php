<?php

        include('connect.php');

        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $message=$_POST['subject'];


        $sql1 = "INSERT INTO helpdesk VALUES ('$name','$email','$number','$message')";

        if ($con->query($sql1) === TRUE) 
        {
        echo "New record created successfully<BR><BR><BR>";
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $con->error;
        }
        
        mysql_close($con);
?>