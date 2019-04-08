<?php
session_start();
$error_array=array();
if (isset($_POST["login"]))
{
	include'../database_driver/db.php';
	$username=strip_tags(mysqli_real_escape_string($con,$_POST["username"]));
    $password=sha1(mysqli_real_escape_string($con,$_POST["password"]));
    $r=mysqli_query($con,"select * from youthlog where username='$username' and password='$password'");
		if ($arr=mysqli_fetch_assoc($r))
			{
				$_SESSION['rid']=$rid;
				header('location: ../Userdash/dashboard.php');
			}
			else{
				header('location: ../index.php');

			}
		}
	else{
		header('location: ../index.php');
	}
}
?>
