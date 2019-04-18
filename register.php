<?php
session_start();
if (isset($_POST["register"]))
{
    $name = strip_tags($_POST["name"]);
	$email =strip_tags($_POST["email"]);
    $password = sha1($_POST["password"]);
    $timestamp=date("Y-m-d H:i:s");
    include 'db.php';
    $checkuser=mysqli_query($con,"select * from youthlog where email='$email'");
    if($checkuserarr=mysqli_fetch_assoc($checkuser)){
        header('location: index.php');
    }
    else
    {
        $r=mysqli_query($con,"INSERT INTO youthlog(name, email, password, timestamp) VALUES ('$name','$email','$password','$timestamp')");
            if ($r>0)
            {
                $checkuser=mysqli_query($con,"select * from youthlog where email='$email'");
                $checkuserarr=mysqli_fetch_assoc($checkuser);
                $_SESSION['youthid']=$checkuserarr['youthid'];
                header('location: dashboard.php');
            }
            else{header('location: index.php');}
    }
}
?>