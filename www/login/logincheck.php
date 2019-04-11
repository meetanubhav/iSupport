<?php
session_start();
$error_array=array();
if (isset($_POST["login"]))
{
	include '../database_driver/db.php';
	$email=strip_tags(mysqli_real_escape_string($con,$_POST["email"]));
    $password=sha1(mysqli_real_escape_string($con,$_POST["password"]));
    $r=mysqli_query($con,"select * from youthlog where email='$email' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$_SESSION['youthid']=$arr['youthid'];
				header('location: ../Userdash/dashboard.php');
			}
			else{
				header('location: ../../index.php');

            }
}
	else{
		header('location: ../../index.php');
	}
?>
