<?php 
   if (isset($_POST["submit"]))
    {
        include '../database_driver/db.php';
        $fname=strip_tags(mysqli_real_escape_string($con,$_POST["fname"]));
        $lname=strip_tags(mysqli_real_escape_string($con,$_POST["lname"]));
        $email=strip_tags(mysqli_real_escape_string($con,$_POST["email"]));
        $petid=strip_tags(mysqli_real_escape_string($con,$_POST["petid"]));
        $timestamp=date("Y-m-d H:i:s");

        $check=mysqli_query($con,"select * from supportlog where email='$email'");
        if ($arr=mysqli_fetch_assoc($check))
            {
            //    header('location: ../../index.php');
            }
        else{
             $r=mysqli_query($con,"INSERT INTO supportlog(petid,name, email, password, timestamp) VALUES ('$petid','$fname','$lname','$email','$timestamp')");
            // header('location: ../../index.php');
        }
    }
?>