<?php 
   if (isset($_POST["submit"]))
    {
        include '../database_driver/db.php';
        $fname=strip_tags(mysqli_real_escape_string($con,$_POST["fname"]));
        $lname=strip_tags(mysqli_real_escape_string($con,$_POST["lname"]));
        $email=strip_tags(mysqli_real_escape_string($con,$_POST["email"]));
        $petid=strip_tags(mysqli_real_escape_string($con,$_POST["petid"]));
        $timestamp=date("Y-m-d H:i:s");
        echo $fname;
        echo $lname;
        echo $email;
        echo $petid;
        echo $timestamp;

        $check=mysqli_query($con,"select * from supportlog where email='$email'");
        if ($arr=mysqli_fetch_assoc($check))
            {
               header('location: ../allCamp/allCamp.php');
            }
        else{
             $r=mysqli_query($con,"INSERT INTO supportlog(petid,fname,lname, email, timestamp) VALUES ('$petid','$fname','$lname','$email','$timestamp')");
             header('location: ../allCamp/allCamp.php');
           
        }
    }
?>