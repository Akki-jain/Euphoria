<?php

        include('connect.php');

        $name=$_POST['name'];
        $number=$_POST['shift'];
        $shift=$_POST['shift'];


        $sql1 = "INSERT INTO nurse_booking VALUES ('$name','$email','$number','$message')";

        if ($con->query($sql1) === TRUE) 
        {
                echo "<script>alert('Message Received Successfully')</script>";
                include 'helpdesk.php';
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $con->error;
        }
?>