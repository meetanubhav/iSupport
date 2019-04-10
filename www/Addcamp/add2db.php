<?php
session_start();
 $youthid=$_SESSION['youthid']; 
 
if (isset($_POST["submit"]))
{
    // 
    $target_dir = "../../assets/uploads/";
    $uploaded_image =  rand().basename($_FILES["fileToUpload"]["name"]);
    $pic = $target_dir . $uploaded_image;
    $uploadOk = 1;
    echo $pic;
    $imageFileType = strtolower(pathinfo($pic,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($pic)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pic)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    // 
    $title = strip_tags($_POST["title"]);
    $petto =strip_tags($_POST["petto"]);
    $problem =strip_tags($_POST["problem"]);
    $timestamp=date("Y-m-d H:i:s");
    include '../database_driver/db.php';
    $r=mysqli_query($con,"INSERT INTO petition(youthid,title,petto,problem,pic,timestamp) VALUES ('$youthid','$title','$petto','$problem','$pic','$timestamp')");
        if ($r>0)
        {
            // $arr=mysqli_fetch_assoc($r)
            // $_SESSION['youthid']=$arr['youthid'];
            header('location: ../UserDash/dashboard.php');
        }
        else{header('location: AddCamp.php');}
    }
?>