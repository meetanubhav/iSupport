<?php
session_start();
session_destroy();
$youthid=$_SESSION['youthid'];
session_unset($_SESSION["youthid"]);
session_unset($_SESSION['sessionid']);
header('location:../../index.php');
?>