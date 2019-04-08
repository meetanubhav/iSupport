<?php
session_start();
if (isset($_POST["register"]))
{
    $name = strip_tags($_POST["name"]);
	$email =strip_tags($_POST["email"]);
    $password = sha1($_POST["password"]);
    $timestamp=date("Y-m-d H:i:s");
    include '../database_driver/db.php';
    $r=mysqli_query($con,"INSERT INTO youthlog(name, email, password, timestamp) VALUES ('$name','$email','$password','$timestamp')");
        if ($r>0)
        {
            header('location: ../UserDash/dashboard.php');
        }
        else{header('location: ../../index.php');}
    }
?>