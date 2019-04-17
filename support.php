<?php 
   if (isset($_POST["submit"]))
    {
        include 'db.php';
        $fname=strip_tags(mysqli_real_escape_string($con,$_POST["fname"]));
        $lname=strip_tags(mysqli_real_escape_string($con,$_POST["lname"]));
        $email=strip_tags(mysqli_real_escape_string($con,$_POST["email"]));
        $petid=strip_tags(mysqli_real_escape_string($con,$_POST["petid"]));
        $timestamp=date("Y-m-d H:i:s");
        // echo $fname;
        // echo $lname; 
        // echo $email;
        // echo $petid;
        // echo $timestamp;
        $counter=0;
        
        $check=mysqli_query($con,"select * from supportlog where email='$email'");
          while ($arr = $check->fetch_assoc()){
              if($arr['petid']==$petid and $arr['email']==$email){
                //   echo 'exist <br>';
                 header('location: allCamp.php?message="error"');
                //  break;
                $counter+=1;
              }
            //   else{
            //       echo 'added <br>';
                //  $r=mysqli_query($con,"INSERT INTO supportlog(petid,fname,lname, email, timestamp) VALUES ('$petid','$fname','$lname','$email','$timestamp')");
                // header('location: allCamp/allCamp.php?message="thankyou"');
              

          }
          if($counter==0){
            //   echo 'add';
             $r=mysqli_query($con,"INSERT INTO supportlog(petid,fname,lname, email, timestamp) VALUES ('$petid','$fname','$lname','$email','$timestamp')");
                header('location: allCamp.php?message="thankyou"');
          }
        // if ($arr=mysqli_fetch_assoc($check))
        //     {
        //         $error='already exist';
        //         echo $error;
        // //    header('location: allCamp/allCamp.php?error="error"');
        //     }
        // else{
        //     //  $r=mysqli_query($con,"INSERT INTO supportlog(petid,fname,lname, email, timestamp) VALUES ('$petid','$fname','$lname','$email','$timestamp')");
        //     //  header('location: allCamp/allCamp.php?thankyou="thankyou"');
        //    echo 'added';
        // }
    }
?>