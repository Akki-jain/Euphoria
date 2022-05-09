<?php

        include('connect.php');

        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $message=$_POST['subject'];


        $sql1 = "INSERT INTO helpdesk VALUES ('$name','$email','$number','$message')";

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