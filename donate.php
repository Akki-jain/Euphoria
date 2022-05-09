<?php
        include('connect.php');

        $donor=$_POST['name'];
        $demail=$_POST['email'];
        $damount=$_POST['number'];
        $remarks=$_POST['subject'];


        $sql1 = "INSERT INTO donations VALUES ('$donor','$demail','$damount','$remarks')";

        if ($con->query($sql1) === TRUE) 
        {

        echo "<script>alert('Donation Successfull')</script>";
        include 'donation.php';
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $con->error;
        }
        
?>