<?php

        include('connect.php');

        $donor=$_POST['name'];
        $demail=$_POST['email'];
        $damount=$_POST['number'];
        $remarks=$_POST['subject'];


        $sql1 = "INSERT INTO donations VALUES ('$donor','$demail','$damount','$remarks')";

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